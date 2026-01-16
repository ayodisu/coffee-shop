<?php

class BookingController extends Controller
{
    private $bookingModel;

    public function __construct()
    {
        $this->bookingModel = $this->model('Booking');
    }

    public function book()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['date']) || empty($_POST['time']) || empty($_POST['phone']) || empty($_POST['message'])) {
                flash('Please fill in all required fields.', 'alert-danger');
                header("location: " . URLROOT);
            } else {
                if (isset($_SESSION['user_id'])) {
                    $data = [
                        ':first_name' => $_POST['first_name'],
                        ':last_name' => $_POST['last_name'],
                        ':date' => $_POST['date'],
                        ':time' => $_POST['time'],
                        ':phone' => $_POST['phone'],
                        ':message' => $_POST['message'],
                        ':user_id' => $_SESSION['user_id'],
                        ':status' => "Pending"
                    ];

                    $this->bookingModel->createBooking($data);
                    flash('Booking submitted successfully! We will confirm shortly.', 'alert-success');
                    header("location: " . URLROOT);
                } else {
                    flash('Please login to book a table.', 'alert-danger');
                    header("location: " . URLROOT . "/auth/login");
                }
            }
        } else {
            header("location: " . URLROOT);
        }
    }
}
