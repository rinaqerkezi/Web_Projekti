<?php 
include_once 'users-code.php';
include_once 'Database.php';

//$userController = new UserController();
//$register = $userController->update($_POST, $id);

class UserController {
    private $conn;

    public function __construct() {
        $db = new Database(); 
        $this->conn = $db->dbConnect();
    }

    public function create($inputdata) {
        $data = "'" . implode("','", $inputdata) . "'";
        $userQuery = "INSERT INTO userss (Emri, Mbiemri, emaili, passwordi, cpassword, gjinia, nrTel) VALUES ($data)";
        $result = $this->conn->query($userQuery);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id) {
        $userID = validateInput($this->conn, $id);
        $userQuery = "SELECT * FROM userss WHERE id ='$id' LIMIT 1";
        $result = $this->conn;
        $s = $result->query($userQuery);
       
        if ($s->num_rows == 1) {
            $data = $s->fetch_assoc();
            return $data;
        } else {
            return false;
        }
    }

    public function update($inputData, $id) {
        $userID = validateInput($this->conn, $id);
        $Emri = $inputData['Emri'];
        $Mbiemri = $inputData['Mbiemri'];
        $passwordi = $inputData['Passwordi'];
        $nrTel = $inputData['Nrtel'];
    
        $userUpdatedQuery = "UPDATE userss SET Emri='$Emri', Mbiemri='$Mbiemri', Passwordi='$passwordi', NrTel='$nrTel' WHERE id='$id' LIMIT 1";
        $result = $this->conn;
        $result->query($userUpdatedQuery);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    

}
?>
