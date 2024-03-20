<?php

@include 'connect.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = SHA1($_POST['password']);
 

   $select = " SELECT * FROM userss WHERE Emaili = '$email' && Passwordi = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    if($row['user_type'] == 'admin'){
        $_SESSION['admin_name'] = $row['name'];
        header('location:homeadmin.php');
        exit;
    } elseif($row['user_type'] == 'user'){
        $_SESSION['user_name'] = $row['name'];
        header('location:index.php');
        exit;
    }
}else{
      $error[] = 'incorrect email or password!';
   }

if(!$result){
    die("invalid query:".$conn->error);

}


}




if (isset($_POST['Emaili']) && isset($_POST['Passwordi'])) {

    $_SESSION['loggedin'] = true;
    $_SESSION['Emaili'] = $_POST['Emaili']; 
    $_SESSION['LAST_ACTIVITY'] = time(); 

    header("Location: dashboard.php");
    exit;
}






// Check if the user is already logged in, then redirect to another page
if(isset($_SESSION['admin_name']) || isset($_SESSION['user_name'])) {
    // If an admin is logged in, redirect to homeadmin.php
    if(isset($_SESSION['admin_name'])) {
        header('Location: homeadmin.php');
    } 
    // If a regular user is logged in, redirect to index.php
    elseif(isset($_SESSION['user_name'])) {
        header('Location: index.php');
    }
    exit; // Stop further execution
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Form</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <script>
    window.history.forward();
    window.onbeforeunload = function() { return null; };
</script>

</head>
<body>
    <br>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="login.php">LOG IN</a></li>
                <li><a href="offers.php">OFFERS</a></li>
                <li><a href="book.php">BOOK</a></li>
                <li><a href="Destinations.php">DESTINATION</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <div class="wrapper">
        <h1>Log In</h1>
        <form method="POST" action="" onsubmit="return validateForm()">
            <?php 
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            <input type="email" name="email" placeholder="Email" id="email" required>
            <div class="error-message" id="emailError"></div>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div class="error-message" id="passwordError"></div>
            <div class="recover">
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" name="submit" value="login now" class="form-btn">Log In</button>
            <div class="member">
                Not a member? <a href="Signup.php">Register?</a> 
            </div>
        </form>

        <script>
            function validateForm(){
                let email = document.getElementById('email').value;
                let emailError = document.getElementById('emailError');

                let password = document.getElementById('password').value;
                let passwordError = document.getElementById('passwordError');

                emailError.innerText = '';
                passwordError.innerText = '';

                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if(email.trim() === "" || !emailRegex.test(email)){
                    emailError.innerText = "Email is invalid";
                    return false;
                }
                if(password.trim() === ""){
                    passwordError.innerText = 'Password is empty';
                    return false;
                }
                return true;
            }
        </script>
    </div>
</body>
</html>
