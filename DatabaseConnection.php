<?php
class DatabaseConnection{
    
    private $host = "localhost:8008";
    private $username = "rinaqerkezi";
    private $password = "Rina123!";
    private $db = "users";

    function startConnection(){
        try{
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(!$conn){
                echo "Connection failed ";
            } else {
                echo "Connection successful!";
            }

            return $conn; // Return the connection object

        } catch(PDOException $e){
            echo "Connection failed " . $e->getMessage();
            return null;
        }
    }
}
?>
