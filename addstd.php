<?php 

include_once 'configg.php';
include_once 'Register.php';
include_once 'users-code.php';
include_once 'UserController.php';
$re = new Register();

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $register=$re->addRegister($_POST,$_FILES);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="card-header">
<div class="row">
<h3>add user</h3>
</div>
<div class="col-md-6">
    <?php 
    include ('header.php');
    ?>
    <a href="dashboard.php" class="btn btn-info">
        show user info
    </a>

</div>
</div>

<form action="users-code.php.php" method="POST">
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
          


          <button type="submit" id="submit" class="btn-primary" name="submit" size="15">ADD Usesr</button>
          </form>
</body>
</html>