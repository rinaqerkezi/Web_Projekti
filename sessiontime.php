<?php
session_start();

define('SESSION_TIMEOUT', 30 * 60);

if (isset($_SESSION['LAST_ACTIVITY'])) {
    if (time() - $_SESSION['LAST_ACTIVITY'] > SESSION_TIMEOUT) {
      
        session_unset();
        session_destroy();
        header("Location: login.php?session_expired=1");
        exit;
    }
}
$_SESSION['LAST_ACTIVITY'] = time(); 
