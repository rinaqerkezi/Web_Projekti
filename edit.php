<?php 
include_once 'configg.php';
include_once 'database.php';
include_once 'Register.php';
include_once 'UserController.php';
include_once 'users-code.php';

$re = new Register();

$db = new Database();
$db->dbConnect();

if(isset($_GET['id'])){
    $id = base64_decode($_GET['id']);
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $register = $re->updateUser($_POST, $_FILES, $id);
}

?>

<!DOCTYPE html>
<html>
<body>

    <?php 
    if(isset($_GET['id'])){
        $userID = validateInput($db->conn, $_GET['id']);

        $user = new UserController();

        $result = $user->edit($userID);

        if($result){
    ?>
    <form action="edit.php" method="POST">
    <input type="hidden" name="user_id" value="<?=$result['id']?>">
           <label for="Emri" title="Enter your first name">First Name:</label>
          <input type="text" id="emri" name="emri" value="<?=$result['Emri']?>" size="15" />
          <div class="error-message" id="emriError"></div>
      
          <label for="Mbiemri" title="Enter your last name">Last Name:</label>
          <input type="text" id="mbiemri" name ="mbiemri" value="<?=$result['Mbiemri']?>" size="15" placeholder="Charles" />
          <div class="error-message" id="mbiemriError"></div>
      
          
          <label for="Passwordi" title="Enter a strong password">Password:</label>
          <input type="password" id="passwordi" name="passwordi" value="<?=$result['passwordi']?>" size="15" placeholder="********" />
          <div class="error-message" id="passwordError"></div>
      
         
          <label>Phone number:</label>
          <input type="tel" id="phoneNumber" name="nrtel" value="<?=$result['nrTel']?>" placeholder="123-456-789" />
          <div class="error-message" id="phoneNumberError"></div>
          
          <button type="submit" name="update" id="submit" size="15">update</button>
    </form>

        
    <?php
        } else {
            echo "<h4>Record not found</h4>";
        }
    } else {
        echo "<h4>Something went wrong</h4>";
    }
    ?>


</body>
</html>

<?php 

if(isset($_POST['update'])){
    $id = $perdorues['user_id'];
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['emaili'];
    $password = $_POST['passwordi'];
    $nrtel = $_POST['nrtel'];
    
    $re->editUser($id, $emri, $mbiemri, $email, $password, $nrtel);
    header("location:userController.php");
}

?>
