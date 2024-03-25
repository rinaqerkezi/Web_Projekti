<?php
require('connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $conn->prepare("DELETE FROM `ofertat` WHERE id = ?");
    $delete->bind_param("i", $id);

    if ($delete->execute()) {
        echo "oferta deleted successfully!";
    } else {
        echo "Error deleting oferta: " . $delete->error;
    }

    $delete->close();
}

header("Location: dashboard.php");
exit();
?>