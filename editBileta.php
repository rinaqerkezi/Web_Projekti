<?php
session_start();
require('configg.php');
require('config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID = $_POST['id']; 

    $newDataArritjes = $_POST['dataArritjes'];
    $newDataKthimit = $_POST['dataKthimit'];
    $newNrAdults = $_POST['nrAdults'];
    $newNrKids = $_POST['nrKids'];

    $updateQuery = "UPDATE bileta SET dataArritjes='$newDataArritjes', dataKthimit='$newDataKthimit', nrAdults='$newNrAdults', nrKids='$newNrKids' WHERE ID=$ID";
    mysqli_query($conn, $updateQuery);
}

$ID = $_GET['id'];
$query = "SELECT * FROM bileta WHERE ID=$ID";
$result1 = mysqli_query($conn, $query);
$bileta = mysqli_fetch_assoc($result1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit BILETA</title>
    
</head>

<body>
    <div class="menu">
        <h2>Edit Bileta</h2>
        <h2><a href="logout.php">Log out</a></h2>
    </div>
    <hr>
    <div class="main">
        <form method="post" action="">
            
            <label for="new_dataArritjes">bileta data Arritjes:</label>
            <input type="text" name="dataArritjes" value="<?php echo $bileta['dataArritjes']; ?>" required>

            <label for="new_dataKthimit">bileta data kthimit:</label>
            <input type="text" name="dataKthimit" value="<?php echo $bileta['dataKthimit']; ?>" required>

            <label for="new_nrAdults">bileta per te rritur:</label>
            <input type="text" name="nrAdults" value="<?php echo $bileta['nrAdults']; ?>" required>

            
            <label for="new_nrKids">bileta perfshirja e femijeve:</label>
            <input type="text" name="nrKids" value="<?php echo $bileta['nrKids']; ?>" required>

            <input type="hidden" name="id" value="<?php echo $bileta['ID']; ?>">

            <input type="submit" value="Update bileta">
            <br><br>
            <button><a href="dashboard.php">back</a></button>
        </form>
    </div>
</body>

</html>