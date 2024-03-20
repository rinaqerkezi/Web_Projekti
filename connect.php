<?php
//define('HOST', 'localhost');
//define('USER', 'root');
//define('PASSWORD', '');
//define('DBNAME', 'webprojekti');


   // $conn = new mysqli('localhost', 'root', '', 'webprojekti');


//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}





$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "webprojekti"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

