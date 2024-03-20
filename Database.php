<?php
include_once 'connect.php';
include_once 'Register.php';

class Database {
    public $host = HOST;
    public $user = USER;
    public $password = '';
    public $database = DATABASE;

    public $conn;  

    public $error;

    public function __construct() {
        $this->dbConnect();
    }

    public function dbConnect() {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$this->conn) {
            $this->error = "Database connection failed";
            return null;
        }
        $this->link = $this->conn; 
        return $this->conn;
    }


    public function insert($query) {
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn) . ' - ' . __LINE__);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    
    public function select($query) {
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn) . ' - ' . __LINE__);
        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    
    public function update($query) {
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn) . ' - ' . __LINE__);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    
    public function delete($query) {
        $result = mysqli_query($this->conn, $query);

        if ($result) {
            echo "Delete query executed successfully";
            return true;
        } else {
            echo "Error executing delete query: " . mysqli_error($this->conn);
            return false;
        }
        if (isset($_GET['delUser'])) {
            $id = base64_decode($_GET['delUser']);
            echo "ID to delete: " . $id; 
            $deleteUser = $re->deleteUser($id);
        }
        
    }
    
    
    
    


}

?>
