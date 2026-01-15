<?php

class AdminController extends Controller
{
    private $adminModel;
    private $productModel;
    private $orderModel;
    private $bookingModel;

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->productModel = $this->model('Product');
        $this->orderModel = $this->model('Order');
        $this->bookingModel = $this->model('Booking');
    }

    public function index()
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
            exit;
        }

        $counts = $this->adminModel->getCounts();

        $this->view('admin/index', ['counts' => $counts]);
    }

    // Products
    public function products()
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
            exit;
        }
        $products = $this->productModel->getAllProducts();
        $this->view('admin/products/index', ['products' => $products]);
    }

    public function createProduct()
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['type'])) {
                echo "<script>alert('Please fill inputs');</script>";
                $this->view('admin/products/create');
            } else {
                $filename = $_FILES['image']['name'];
                $file_ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

                if (!in_array($file_ext, $allowed_ext)) {
                    echo "<script>alert('Invalid file type');</script>";
                    $this->view('admin/products/create');
                    return;
                }

                $new_image_name = uniqid("IMG-", true) . '.' . $file_ext;
                // Path relative to public/index.php
                $destination = "../public/images/" . $new_image_name;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                    $data = [
                        ':name' => $_POST['name'],
                        ':price' => $_POST['price'],
                        ':description' => $_POST['description'],
                        ':type' => $_POST['type'],
                        ':image' => $new_image_name
                    ];

                    $this->productModel->createProduct($data);
                    header("location: " . URLROOT . "/adminController/products");
                } else {
                    echo "<script>alert('File upload failed');</script>";
                    $this->view('admin/products/create');
                }
            }
        } else {
            $this->view('admin/products/create');
        }
    }

    public function deleteProduct($id)
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }

        $imageName = $this->productModel->deleteProduct($id);
        if ($imageName) {
            unlink("../public/images/" . $imageName);
        }
        header("location: " . URLROOT . "/adminController/products");
    }

    // Orders
    public function orders()
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }
        $orders = $this->orderModel->getAllOrders();
        $this->view('admin/orders/index', ['orders' => $orders]);
    }

    public function deleteOrder($id)
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }
        $this->orderModel->deleteOrder($id);
        header("location: " . URLROOT . "/adminController/orders");
    }

    public function updateOrder($id) // Just showing the form logic is implicit, usually we'd have a view
    {
        // For simplicity, let's assume we might just want to toggle status or show a simpler update form
        // Check legacy: It was a form to change status.
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }

        // If POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->orderModel->updateStatus($id, $_POST['status']);
            header("location: " . URLROOT . "/adminController/orders");
        } else {
            // Show update view
            $order = $this->orderModel->getOrderById($id);
            $this->view('admin/orders/update', ['order' => $order]);
        }
    }

    // Bookings
    public function bookings()
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }
        $bookings = $this->bookingModel->getAllBookings();
        $this->view('admin/bookings/index', ['bookings' => $bookings]);
    }

    public function deleteBooking($id)
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }
        $this->bookingModel->deleteBooking($id);
        header("location: " . URLROOT . "/adminController/bookings");
    }

    public function updateBooking($id)
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->bookingModel->updateStatus($id, $_POST['status']);
            header("location: " . URLROOT . "/adminController/bookings");
        } else {
            $booking = $this->bookingModel->getBookingById($id);
            $this->view('admin/bookings/update', ['booking' => $booking]);
        }
    }

    // Admins
    public function admins()
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }
        $admins = $this->adminModel->getAllAdmins();
        $this->view('admin/admins/index', ['admins' => $admins]);
    }

    public function createAdmin()
    {
        if (!isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/login");
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['email']) || empty($_POST['adminname']) || empty($_POST['password'])) {
                echo "<script>alert('Inputs empty');</script>";
                $this->view('admin/admins/create');
            } else {
                $data = [
                    ':adminname' => $_POST['adminname'],
                    ':email' => $_POST['email'],
                    ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
                ];
                $this->adminModel->createAdmin($data);
                header("location: " . URLROOT . "/adminController/admins");
            }
        } else {
            $this->view('admin/admins/create');
        }
    }

    public function login()
    {
        if (isset($_SESSION['admin_name'])) {
            header("location: " . URLROOT . "/adminController/index");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                echo "<script>alert('Please fill inputs');</script>";
                $this->view('admin/login');
            } else {
                $admin = $this->adminModel->findAdminByEmail($_POST['email']);

                if ($admin) {
                    if (password_verify($_POST['password'], $admin['password'])) {
                        $_SESSION['admin_name'] = $admin['adminname'];
                        $_SESSION['email'] = $admin['email'];
                        $_SESSION['admin_id'] = $admin['id'];
                        header("location: " . URLROOT . "/adminController/index");
                    } else {
                        echo "<script>alert('Password incorrect');</script>";
                        $this->view('admin/login');
                    }
                } else {
                    echo "<script>alert('Admin not found');</script>";
                    $this->view('admin/login');
                }
            }
        } else {
            $this->view('admin/login');
        }
    }

    public function logout()
    {
        unset($_SESSION['admin_name']);
        unset($_SESSION['email']);
        unset($_SESSION['admin_id']);
        session_destroy();
        header("location: " . URLROOT . "/adminController/login");
    }
}
