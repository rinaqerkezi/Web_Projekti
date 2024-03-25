<?php




    
    setcookie('email', '', time() - 3600, '/');
    

    
if(isset($_POST['logout-btn'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

?>