<?php
include_once 'connect.php';
include_once 'Register.php';

$re = new Register();

$message = ''; // Initialize an empty message variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $register = $re->addRegister($_POST, $_FILES);
    
    if ($register) {
        // If user addition is successful, set the success message
        $message = 'User added successfully.';
        
        header("Location: dashboard.php");
        //exit(); // Make sure to exit after redirection
    } else {
        // If user addition fails, you can handle the error or display an error message
        $message = 'Failed to add user. Please try again.';
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .col-md-6 {
            margin-top: 10px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>











<body>


<div class="card-header">
<div class="row">
<h3>add user</h3>
</div>
<div class="col-md-6">
    <?php 
    include ('connect.php');

    ?>
    <a href="dashboard.php" class="btn btn-info">
        show user info
    </a>

</div>
</div>


<?php if (!empty($message)): ?>
    <div class="success-message"><?php echo $message; ?></div>
<?php endif; ?>






<form action="" method="POST">
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

          


          <button type="submit" id="submit" class="btn-primary" name="submit" size="15">ADD User</button>
          </form>
</body>
</html>