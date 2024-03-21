<?php
require('connect.php');
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $conn->prepare("DELETE FROM `bileta` WHERE id = ?");
    $delete->bind_param("i", $id);

    if ($delete->execute()) {
        echo "bileta deleted successfully!";
    } else {
        echo "Error deleting bileta: " . $delete->error;
    }

    $delete->close();
}

header("Location: dashboard.php");
exit();
?>