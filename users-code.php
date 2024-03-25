<?php
include_once 'connect.php';
include_once 'Database.php';
include_once 'UserController.php';

$db = new Database();
$db->dbConnect();

function validateInput($conn, $input) {
    return mysqli_real_escape_string($conn, $input);
}

// $id = isset($_POST['user_id']) ? validateInput($db->conn, $_POST['user_id']) : null;


if (isset($_POST['update'])) {
    
    $inputdata = [
        'Emri' => validateInput($db->conn, $_POST['Emri']),
        'Mbiemri' => validateInput($db->conn, $_POST['Mbiemri']),
        'Passwordi' => validateInput($db->conn, $_POST['Passwordi']),
        'Nrtel' => validateInput($db->conn, $_POST['Nrtel']),
    ];
    $userController = new UserController;
    echo $inputdata['Emri'];
echo $id;
    $result = $userController->update($inputdata, $id);

    if ($result) {
        echo $inputdata['Emri'];
        echo $inputdata['Mbiemri'];
        echo $id;
           header("Location: dashboard.php");
           exit();
    } else {
        echo "Update failed!";
    }
}
   // if ($result) {
   //     header("Location: dashboard.php");
   // } else {
   //     header("Location: dashboard.php");
   // }


 $id = isset($_POST['id']) ? validateInput($db->conn, $_POST['user_id']):null;

if (isset($_POST['update'])) {
   $inputdata = [
       'Emri' => validateInput($db->conn, $_POST['Emri']),
       'Mbiemri' => validateInput($db->conn, $_POST['Mbiemri']),
       'passwordi' => validateInput($db->conn, $_POST['passwordi']),
       'nrTel' => validateInput($db->conn, $_POST['nrTel']),
   ];

   $userController = new UserController;
   $result = $userController->update($inputdata, $id);
}

?>