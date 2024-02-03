<?php
require('config2.php');
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $conn->prepare("DELETE FROM `ofertat` WHERE id = ?");
    $delete->bind_param("i", $id);

    if ($delete->execute()) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . $delete->error;
    }

    $delete->close();
}

header("Location: dashboard.php");
exit();
?>