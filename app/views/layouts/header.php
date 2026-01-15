<?php
if (session_status() === PHP_SESSION_NONE) session_start();
// Ensure Image Products path is correct - accessible from browser
// For now, it points to the legacy admin panel location
if (!defined('IMAGEPRODUCTS')) {
    define("IMAGEPRODUCTS", "http://localhost/coffeefy/admin-panel/products-admins/images");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo APPNAME; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo URLROOT; ?>">Coffeefy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?php echo URLROOT; ?>/home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>/home/menu" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>/home/services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>/home/about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>/home/contact" class="nav-link">Contact</a></li>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item cart"><a href="<?php echo URLROOT; ?>/cart" class="nav-link"><span class="icon icon-shopping_cart"></span></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo htmlspecialchars($_SESSION['username']); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/bookings">Your Bookings</a></li>
                                <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/orders">Your Orders</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/auth/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="nav-item"><a href="<?php echo URLROOT; ?>/auth/login" class="nav-link">login</a></li>
                        <li class="nav-item"><a href="<?php echo URLROOT; ?>/auth/register" class="nav-link">register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->