<?php
session_start();
include_once 'RegisterB.php';
include_once 'Database.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $registerB = new RegisterB();

    $offer_number = isset($_POST['offer_number']) ? $_POST['offer_number'] : '';
    $arrival_date = isset($_POST['arrival_date']) ? $_POST['arrival_date'] : '';
    $departure_date = isset($_POST['departure_date']) ? $_POST['departure_date'] : '';
    $adults = isset($_POST['adults']) ? $_POST['adults'] : '';
    $children = isset($_POST['children']) ? $_POST['children'] : '';

 
    $data = array(
        'dataArritjes' => $arrival_date,
        'dataKthimit' => $departure_date,
        'nrAdults' => $adults,
        'nrKids' => $children
    );

    $msg = $registerB->addTicket($data);

    
    if ($msg === "Ticket added successfully") {
      
        $_SESSION['success_message'] = "Ticket added successfully";
        header("Location: booked.php"); 
        exit();
    } else {
        
        $_SESSION['error_message'] = "Failed to add ticket";
        header("Location: index.php"); 
        exit();
    }
} else {
    
    header("Location: index.php");
    exit();
}
?>

