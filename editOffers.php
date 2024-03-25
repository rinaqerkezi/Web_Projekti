<?php
require('connect.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $offerId = $_POST['offer_id'];

    $newcmimi = $_POST['new_cmimi'];
    $newvendi = $_POST['new_vendi'];
    $newkoment = $_POST['new_koment'];


    $updateQuery = "UPDATE ofertat SET  cmimi='$newcmimi', vendi='$newvendi', koment='$newkoment' WHERE ID=$offerId";
    mysqli_query($conn, $updateQuery);
}

$offerId = $_GET['id'];
$query = "SELECT * FROM ofertat WHERE ID=$offerId";
$result = mysqli_query($conn, $query);
$offer = mysqli_fetch_assoc($result);

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

            <label for="new_cmimi">offer cmimi:</label>
            <input type="text" name="new_cmimi" value="<?php echo $offer['cmimi']; ?>" required>

            <label for="new_vendi">offer vendi:</label>
            <input type="text" name="new_vendi" value="<?php echo $offer['vendi']; ?>" required>

            <label for="new_koment">offer koment:</label>
            <input type="text" name="new_koment" value="<?php echo $offer['koment']; ?>" required>

            <input type="hidden" name="offer_id" value="<?php echo $offer['ID']; ?>">

            <input type="submit" value="Update offers">
            <br><br>
            <button><a href="dashboard.php">back</a></button>
        </form>
    </div>
</body>

</html>