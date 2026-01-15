<?php

class AuthController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        if (isset($_SESSION['username'])) {
            header("location: " . URLROOT);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (!validate_csrf_token($_POST['csrf_token'])) {
                echo "<script>alert('CSRF validation failed');</script>";
                exit;
            }

            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password'])
            ];

            if (empty($data['email']) || empty($data['password']) || empty($data['username'])) {
                echo "<script>alert('Please fill all inputs');</script>";
                $this->view('auth/register', $data);
            } else {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register User
                if ($this->userModel->register($data)) {
                    header('location: ' . URLROOT . '/auth/login');
                } else {
                    die('Something went wrong');
                }
            }
        } else {
            // Load Form
            $data = [
                'username' => '',
                'email' => '',
                'password' => ''
            ];
            $this->view('auth/register', $data);
        }
    }

    public function login()
    {
        if (isset($_SESSION['username'])) {
            header("location: " . URLROOT);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!validate_csrf_token($_POST['csrf_token'])) {
                echo "<script>alert('CSRF validation failed');</script>";
                exit;
            }

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password'])
            ];

            if (empty($data['email']) || empty($data['password'])) {
                echo "<script>alert('Please fill all inputs');</script>";
                $this->view('auth/login', $data);
            } else {
                // Check for user
                $loggedInUser = $this->userModel->findUserByEmailOrUsername($data['email']);

                if ($loggedInUser) {
                    // Verify Password
                    if (password_verify($data['password'], $loggedInUser['password'])) {
                        $this->createUserSession($loggedInUser);
                    } else {
                        echo "<script>alert('Password incorrect');</script>";
                        $this->view('auth/login', $data);
                    }
                } else {
                    echo "<script>alert('No user found');</script>";
                    $this->view('auth/login', $data);
                }
            }
        } else {
            $data = [
                'email' => '',
                'password' => ''
            ];
            $this->view('auth/login', $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        header('location: ' . URLROOT);
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        session_destroy();
        header('location: ' . URLROOT);
    }
}
