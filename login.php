

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in form</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>



</script>

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

<br>
    <div class="wrapper">
        <h1>Log In</h1>
        <form method="POST"  action="handle-login.php">
       <input type="text" placeholder="username" id="username" size="15">
     <input type="password" id="password" placeholder="password">
             

            <div class="recover">
           <a href="#">Forgot password?</a>
            </div>
            </form>
         <button type="submit" name="submit" id="login-btn">Log In</button>
        <div class="member">
             Not a memeber><a href="Signup.php">Register?</a> 
            </div>
         </div> 
        </body>

</html>    