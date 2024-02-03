<?php 


$id = $_GET['id'];
include_once 'configg.php';
include_once 'database.php';
include_once 'Register.php';
include_once 'UserController.php';


$re = new Register();

$db = new Database();
$db->dbConnect();


?>

<!DOCTYPE html>
<html>
<body>

    <?php 
  
        $user = new UserController();

        $result = $user->edit($id);
        echo $result['id'];
        echo $result['Emri'];

        // if($result){
    ?>
    <form action="" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $result['id']?>">
           <label for="Emri" title="Enter your first name">First Name:</label>
          <input type="text" id="emri" name="Emri" value="<?php echo $result['Emri']?>" size="15" />
          <div class="error-message" id="emriError"></div>
      
          <label for="Mbiemri" title="Enter your last name">Last Name:</label>
          <input type="text" id="mbiemri" name ="Mbiemri" value="<?php echo $result['Mbiemri']?>" size="15" placeholder="Charles" />
          <div class="error-message" id="mbiemriError"></div>
      
          
          <label for="Passwordi" title="Enter a strong password">Password:</label>
          <input type="password" id="passwordi" name="Passwordi" value="<?php echo $result['Passwordi'];?>" />
          <div class="error-message" id="passwordError"></div>
      
         
          <label>Phone number:</label>
          <input type="tel" id="phoneNumber" name="Nrtel" value="<?php echo $result['NrTel']?>"  />
          <div class="error-message" id="phoneNumberError"></div>
          
          <button type="submit" name="update" id="submit" size="15">update</button>
    </form>

        
    <?php
        // } else {
        //     echo "<h4>Record not found</h4>";
        // }
    //  else {
    //     echo "<h4>Something went wrong</h4>";
    // }
    ?>


</body>
</html>

<?php 
include_once 'users-code.php';



?>
