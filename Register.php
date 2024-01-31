<?php
include_once 'config.php';
include_once 'Database.php';

class Register {
    public $db;

    public function __construct() {
        $this->db = new Database();
        $this->db->dbConnect();  // Connect to the database here
    }

    public function addRegister($data, $file) {
        // Check if the required fields are set in $_POST
        $Emri = isset($_POST['emri']) ? mysqli_real_escape_string($this->db->link, $_POST['emri']) : '';
        $Mbiemri = isset($_POST['mbiemri']) ? mysqli_real_escape_string($this->db->link, $_POST['mbiemri']) : '';
        $Emaili = isset($_POST['email']) ? mysqli_real_escape_string($this->db->link, $_POST['email']) : '';
        $Passwordi = isset($_POST['passwordi']) ? SHA1($_POST['passwordi']) : '';
        $CPassword = isset($_POST['confirm']) ? SHA1($_POST['confirm']) : '';
        $Gjinia = isset($_POST['gjinia']) ? mysqli_real_escape_string($this->db->link, $_POST['gjinia']) : '';
        $NrTel = isset($_POST['nrtel']) ? mysqli_real_escape_string($this->db->link, $_POST['nrtel']) : '';
    
        // Build and execute the insert query
        $query = "INSERT INTO `userss`(`Emri`, `Mbiemri`, `Emaili`, `Passwordi`, `CPassword`, `Gjinia`, `NrTel`) VALUES ('$Emri','$Mbiemri','$Emaili','$Passwordi','$CPassword','$Gjinia',' $NrTel')";
        $result = $this->db->insert($query);
    
        // Check the result and return a message
        if ($result) {
            $msg = "Successful";
            return $msg;
        } else {
            $msg = "Failed";
            return $msg;
        }
    }
    
}
?>
