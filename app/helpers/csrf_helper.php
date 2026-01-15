<?php
// Basic CSRF Protection Helper

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function create_csrf_token()
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validate_csrf_token($token)
{
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function csrf_field()
{
    $token = create_csrf_token();
    return '<input type="hidden" name="csrf_token" value="' . $token . '">';
}
