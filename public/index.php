<?php
if (session_status() === PHP_SESSION_NONE) session_start();

require_once '../app/core/App.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Database.php';
require_once '../app/helpers/csrf_helper.php';

define('URLROOT', 'http://localhost/coffeefy/public');
define('APPNAME', 'Coffeefy');
define('APPROOT', dirname(dirname(__FILE__)) . '/app');

// Simple Autoloader (Optional replacement for manual requires later)
// spl_autoload_register(function ($class_name) {
//    include '../app/models/' . $class_name . '.php';
// });

$app = new App;
