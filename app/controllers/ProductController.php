<?php

class ProductController extends Controller
{
    private $productModel;
    private $cartModel;
    private $orderModel;

    public function __construct()
    {
        $this->productModel = $this->model('Product');
        $this->cartModel = $this->model('Cart');
        $this->orderModel = $this->model('Order');
    }

    public function single($id)
    {
        $product = $this->productModel->getProductById($id);
        $relatedProducts = $this->productModel->getRelatedProducts($product->type, $id);

        $inCart = false;
        if (isset($_SESSION['user_id'])) {
            $inCart = $this->cartModel->checkItemInCart($id, $_SESSION['user_id']);
        }

        $data = [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'inCart' => $inCart
        ];

        $this->view('products/single', $data);
    }

    public function addToCart()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {

            // Basic CSRF check should be added here too if possible

            $data = [
                ':name' => $_POST['name'],
                ':image' => $_POST['image'],
                ':price' => $_POST['price'],
                ':pro_id' => $_POST['pro_id'],
                ':description' => $_POST['description'],
                ':quantity' => $_POST['quantity'],
                ':user_id' => $_SESSION['user_id']
            ];

            $this->cartModel->addItem($data);
            flash('Added to cart successfully!', 'alert-success');
            header("location: " . URLROOT . "/product/single/" . $_POST['pro_id']);
        } else {
            header("location: " . URLROOT);
        }
    }

    public function cart()
    {
        if (!isset($_SESSION['user_id'])) {
            header("location: " . URLROOT . "/auth/login");
            exit;
        }

        $cartItems = $this->cartModel->getCartItems($_SESSION['user_id']);
        $total = $this->cartModel->getCartTotal($_SESSION['user_id']);

        if (isset($_POST['checkout'])) {
            // Simplified calculation: Subtotal + Shipping (10) - Discount (3)
            // Ideally this should be a method in Cart model
            $_SESSION['total_price'] = $total + 10 - 3;
            header("location: " . URLROOT . "/product/checkout");
            exit;
        }

        $data = [
            'cartItems' => $cartItems,
            'total' => $total
        ];

        $this->view('products/cart', $data);
    }

    public function deleteCartItem($id)
    {
        if (isset($_SESSION['user_id'])) {
            $this->cartModel->deleteItem($id);
            header("location: " . URLROOT . "/product/cart");
        }
    }

    public function checkout()
    {
        if (!isset($_SESSION['user_id']) || !isset($_SESSION['total_price'])) {
            header("location: " . URLROOT);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['first_name']) || empty($_POST['last_name'])) {
                echo "<script>alert('Please fill inputs');</script>";
                // Reload view with errors ideally
            } else {
                $data = [
                    ':first_name' => $_POST['first_name'],
                    ':last_name' => $_POST['last_name'],
                    ':state' => $_POST['state'],
                    ':street_address' => $_POST['street_address'],
                    ':town' => $_POST['town'],
                    ':zip_code' => $_POST['zip_code'],
                    ':phone' => $_POST['phone'],
                    ':email' => $_POST['email'],
                    ':user_id' => $_SESSION['user_id'],
                    ':status' => "pending",
                    ':total_price' => $_SESSION['total_price']
                ];

                $this->orderModel->createOrder($data);
                header("location: " . URLROOT . "/product/pay");
            }
        } else {
            $this->view('products/checkout');
        }
    }

    public function pay()
    {
        if (!isset($_SESSION['total_price']) || !isset($_SERVER['HTTP_REFERER'])) {
            // Basic protection
            // header("location: " . URLROOT);
        }
        $this->view('products/pay');
    }

    public function success()
    {
        // Logic from delete-cart.php
        if (isset($_SESSION['user_id'])) {
            $this->cartModel->deleteAll($_SESSION['user_id']);
            // Maybe redirect to orders page or thank you
            header("location: " . URLROOT . "/product/cart");
        }
    }
}
