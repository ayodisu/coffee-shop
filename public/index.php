<?php
if (session_status() === PHP_SESSION_NONE) session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once '../app/core/App.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Database.php';
require_once '../app/helpers/csrf_helper.php';
require_once '../app/helpers/session_helper.php';

define('URLROOT', 'https://coffeefy.test/public');
define('APPNAME', 'Coffeefy');
define('APPROOT', dirname(dirname(__FILE__)) . '/app');
define('IMAGEPRODUCTS', URLROOT . '/images');

// Simple Autoloader (Optional replacement for manual requires later)
// spl_autoload_register(function ($class_name) {
//    include '../app/models/' . $class_name . '.php';
// });

$app = new App;
