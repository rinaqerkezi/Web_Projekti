<?php
include_once 'Register.php';
//include_once 'Database.php';
include_once 'connect.php';


session_start();
$re = new Register();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$register= $re->addRegister($_POST, $_FILES);

}



?>

  <!DOCTYPE html>
    <html lang="en">
  
    <head>
      <title>Sign Up</title>
      <link rel="stylesheet" type="text/css" href="signup.css">
     <script src="ValidoSignUp.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
    </head>
  
    <body>
  
  
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
      <div class="signup-box">
        <h1>Sign Up</h1>
        <form id="signupForm" method="POST" enctype="multipart/form-data" >
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
          <label for="Emri" title="Enter your first name">First Name:</label>
          <input type="text" id="emri" name="emri" placeholder="John" size="15" />
          <div class="error-message" id="emriError"></div>
      
          <label for="Mbiemri" title="Enter your last name">Last Name:</label>
          <input type="text" id="mbiemri" name ="mbiemri" size="15" placeholder="Charles" />
          <div class="error-message" id="mbiemriError"></div>
      
          <label for="Email" title="Enter your email address">Email:</label>
          <input type="email" id="email" name="email" size="15" placeholder="john.charles@example.com" />
          <div class="error-message" id="emailError"></div>
      
          <label for="Passwordi" title="Enter a strong password">Password:</label>
          <input type="password" id="passwordi" name="passwordi" size="15" placeholder="********" />
          <div class="error-message" id="passwordError"></div>
      
          <label for="CPassword" title="Confirm your password">Confirm Password:</label>
          <input type="password" id="confirm" name="confirm" size="15" placeholder="********" />
          <div class="error-message" id="confirmPassError"></div>
      
          <label>Gender:</label>
          <select id="gender" name="gjinia">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <div class="error-message" id="genderError"></div>
      
          <label>Phone number:</label>
          <input type="tel" id="phoneNumber" name="nrtel" placeholder="123-456-789" />
          <div class="error-message" id="phoneNumberError"></div>
          
          <button type="submit" id="submit" size="15">Submit</button>
        </form>
      
        
        <p>
          <br>
          By clicking the Sign Up button,you agree to our <br/>
          
          <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>
      </div>
      <p class="para-2">
        Already have an account? <a href="login.php">Login here</a>
      </p>
  
      
    </body>
  
    </html>
  
  ?>


