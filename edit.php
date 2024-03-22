<?php 
session_start();
include_once 'Database.php';
include_once 'UserController.php';

$id = $_GET['id'];

$userRepository = new UserController();
$user = $userRepository->getUserById($id);

if ($user === false) {
    echo "User not found.";
    exit; // Stop execution to prevent further errors
}

if(isset($_POST['edit'])){
    $id = $user['id'];
    $emri = $_POST['Emri'];
    $mbiemri = $_POST['Mbiemri'];
    $email = $_POST['Emaili'];
    $nrTel = $_POST['NrTel'];
    $password = $_POST['Passwordi'];
    $user_type = $_POST['user_type'];

    $userRepository->update($id, $emri, $mbiemri, $email, $nrTel, $password, $user_type);
}
?>
?>

<!DOCTYPE html>
<html>
<body>

<form action="edit.php?id=<?php echo $id; ?>" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
    <label for="Emri" title="Enter your first name">First Name:</label>
    <input type="text" id="emri" name="Emri" value="<?php echo $user['Emri']; ?>" size="15" />
    <div class="error-message" id="emriError"></div>
  
    <label for="Mbiemri" title="Enter your last name">Last Name:</label>
    <input type="text" id="mbiemri" name ="Mbiemri" value="<?php echo $user['Mbiemri']; ?>" size="15" placeholder="Charles" />
    <div class="error-message" id="mbiemriError"></div>

    <label for="Emaili" title="Enter your email">Email:</label>
    <input type="text" id="Emaili" name ="Emaili" value="<?php echo $user['Emaili']; ?>" size="15" placeholder="example@example.com" />
    <div class="error-message" id="emailError"></div>

    <label for="Passwordi" title="Enter a strong password">Password:</label>
    <input type="password" id="passwordi" name="Passwordi" value="<?php echo $user['Passwordi']; ?>" />
    <div class="error-message" id="passwordError"></div>

    <label for="NrTel" title="Enter your phone number">Phone number:</label>
    <input type="tel" id="NrTel" name="NrTel" value="<?php echo $user['NrTel']; ?>" />
    <div class="error-message" id="phoneNumberError"></div>
    
    <button type="submit" name="update" id="submit" size="15">Update</button>
</form>

</body>
</html>
