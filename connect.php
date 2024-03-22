<?php


if (!defined('HOST')) {
    define('HOST', 'localhost');
}

if (!defined('USERNAME')) {
    define('USERNAME', 'root');
}

if (!defined('PASSWORD')) {
    define('PASSWORD', '');
}

if (!defined('DBNAME')) {
    define('DBNAME', 'webprojekti');
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprojekti";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;

?>
