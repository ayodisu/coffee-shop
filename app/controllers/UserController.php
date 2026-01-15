<?php

class UserController extends Controller
{
    private $orderModel;
    private $bookingModel;
    private $reviewModel;

    public function __construct()
    {
        $this->orderModel = $this->model('Order');
        $this->bookingModel = $this->model('Booking');
        $this->reviewModel = $this->model('Review');
    }

    public function orders()
    {
        if (!isset($_SESSION['user_id'])) {
            header("location: " . URLROOT . "/auth/login");
        }
        $orders = $this->orderModel->getOrdersByUserId($_SESSION['user_id']);
        $this->view('users/orders', ['orders' => $orders]);
    }

    public function bookings()
    {
        if (!isset($_SESSION['user_id'])) {
            header("location: " . URLROOT . "/auth/login");
        }
        $bookings = $this->bookingModel->getBookingsByUserId($_SESSION['user_id']);
        $this->view('users/bookings', ['bookings' => $bookings]);
    }

    public function writeReview()
    {
        if (!isset($_SESSION['user_id'])) {
            header("location: " . URLROOT . "/auth/login");
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['review'])) {
                echo "<script>alert('Review cannot be empty');</script>";
                $this->view('users/write_review');
            } else {
                $data = [
                    ':review' => $_POST['review'],
                    ':username' => $_SESSION['username']
                ];
                $this->reviewModel->createReview($data);
                echo "<script>alert('Thanks for the review!'); window.location.href='" . URLROOT . "';</script>";
            }
        } else {
            $this->view('users/write_review');
        }
    }
}
