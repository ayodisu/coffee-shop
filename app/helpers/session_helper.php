<?php
if (!isset($_SESSION)) {
    session_start();
}

/**
 * Flash message helper
 * EXAMPLE - flash('register_success', 'You are now registered', 'alert alert-success');
 * DISPLAY IN VIEW - echo flash('register_success');
 */
// Simple Flash Message Helper
// Usage: flash('your message', 'alert-success' or 'alert-danger');
function flash($message = '', $class = 'alert-success')
{
    if (!empty($message)) {
        $_SESSION['flash_message'] = $message;
        $_SESSION['flash_class'] = $class;
    }
}


/**
 * Check if a flash message exists without clearing it immediately (optional usage)
 */
function has_flash($name)
{
    return isset($_SESSION[$name]);
}
