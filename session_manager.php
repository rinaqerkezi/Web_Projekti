<?php
// Check if a session is already active before starting a new one
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function redirectLoggedUsers() {
    if(isset($_SESSION['admin_name'])) {
        header('Location: dashboard.php');
        exit;
    } elseif(isset($_SESSION['user_name'])) {
        header('Location: index.php');
        exit;
    }
}
