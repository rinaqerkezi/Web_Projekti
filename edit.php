<?php
//session_start();
require('connect.php');





if (isset($_GET['id'])) {
    // Get the user ID from the URL
    $userid = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userid= $_POST['id'];
    
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
    
    
        $updateQuery = "UPDATE userss SET Emri='$emri' ,Mbiemri='$mbiemri', Emaili='$email', Passwordi='$password' WHERE id=$userid";
        mysqli_query($conn, $updateQuery);
    }
    
    $userid = $_GET['id'];
    $query = "SELECT * FROM userss WHERE id=$userid";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_assoc($result);
    
} else {
    echo "User ID is not provided.";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Offers</title>

</head>

<body>
    <div class="menu">
        <h2>Edit Offers</h2>
        <h2><a href="logout.php">Log out</a></h2>
    </div>
    <hr>
    <div class="main">
        <form method="post" action="">

            <label for="new_cmimi"> emri:</label>
            <input type="text" name="emri" value="<?php echo $users['Emri']; ?>" required>

            <label for="new_vendi"> mbiemri:</label>
            <input type="text" name="mbiemri" value="<?php echo $users['Mbiemri']; ?>" required>

            <label for="new_koment"> email:</label>
            <input type="text" name="email" value="<?php echo $users['Emaili']; ?>" required>

            
            <label for="new_koment"> password:</label>
            <input type="text" name="password" value="<?php echo $users['Passwordi']; ?>" required>

            <input type="hidden" name="id" value="<?php echo $users['id']; ?>">

            <input type="submit" value="Update user">
            <br><br>
            <button><a href="dashboard.php">back</a></button>
        </form>
    </div>
</body>

</html>