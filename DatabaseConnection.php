<?php

class DatabaseConnection {
    
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "webprojekti";

    public function startConnection() {
        if (!$conn = mysqli_connect($this->server, $this->username, $this->password, $this->database)) {
            echo "error: " . mysqli_connect_error();
            return null;
        } else {
            echo "Connected successfully";
            return $conn;
        }
    }
}

$db = new DatabaseConnection;
$conn = $db->startConnection();



?>
