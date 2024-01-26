<?php
class DatabaseConnection{
    
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "webprojekti";



public function startConnection(){
    if(!$conn=mysqli_connect($this->server,$this->username,$this->password,$this->database)){
        echo"error";
        return null;
    }
    else{
        echo"me sukses";
        return $conn;
    }
  }
}

$db =new DataBaseConnection;
$db->startConnection();
?>
