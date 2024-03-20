<?php
include_once 'connect.php';
include_once 'Database.php';


class Register {
    public $db;

   

    public function __construct() {
        
            // Check if the constants are defined
            if (!defined('HOST') || !defined('USERNAME') || !defined('PASSWORD') || !defined('DBNAME')) {
                echo "Error: Database constants are not defined!";
                exit;
            }


        $this->db = new Database();
        $this->db->dbConnect();  
    }

    public function allUsers() {
        $query = "SELECT * FROM userss"; 
        $result = mysqli_query($this->db->conn, $query);
    
        if (!$result) {
            return false;
        }
    
        return $result;
    }

    function validateInput($conn, $input) {
        return mysqli_real_escape_string($conn, $input);
    }

    public function addRegister($data, $file) {
        $Emri = isset($_POST['emri']) ? mysqli_real_escape_string($this->db->link, $_POST['emri']) : '';
        $Mbiemri = isset($_POST['mbiemri']) ? mysqli_real_escape_string($this->db->link, $_POST['mbiemri']) : '';
        $Emaili = isset($_POST['email']) ? mysqli_real_escape_string($this->db->link, $_POST['email']) : '';
        $Passwordi = isset($_POST['passwordi']) ? SHA1($_POST['passwordi']) : '';
        $CPassword = isset($_POST['confirm']) ? SHA1($_POST['confirm']) : '';
        $Gjinia = isset($_POST['gjinia']) ? mysqli_real_escape_string($this->db->link, $_POST['gjinia']) : '';
        $NrTel = isset($_POST['nrtel']) ? mysqli_real_escape_string($this->db->link, $_POST['nrtel']) : '';
    
        $query = "INSERT INTO `userss`(`Emri`, `Mbiemri`, `Emaili`, `Passwordi`, `CPassword`, `Gjinia`, `NrTel`) VALUES ('$Emri','$Mbiemri','$Emaili','$Passwordi','$CPassword','$Gjinia',' $NrTel')";
        $result = $this->db->insert($query);
    
        if ($result) {
            $msg = "Successful";
            return $msg;
        } else {
            $msg = "Failed";
            return $msg;
        }
    }
    
    public function deleteUser($id) {
        $id = $this->validateInput($this->db->conn, $id);
        $query = "DELETE FROM userss WHERE id = '$id'"; 
        $result = $this->db->delete($query);

        if ($result) {
            return "User deleted successfully";
        } else {
            return "Failed to delete user";
        }
    }
    public function handleDeleteUser() {
        if (isset($_GET['delUser'])) {
            $id = base64_decode($_GET['delUser']);
            $register = new Register(); // Instantiate the Register class
            echo "ID to delete: " . $id;
            $deleteUser = $register->deleteUser($id); // Call the deleteUser method on the instantiated object
        }
    }
}
?>
