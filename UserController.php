<?php 
include_once 'users-code.php';

//$userController = new UserController();
//$register = $userController->update($_POST, $id);

class UserController {

    public function __construct() {
        $db = new Database(); 
        $this->conn = $db->conn;
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
        $userQuery = "SELECT * FROM userss WHERE id ='$userID' LIMIT 1";
        $result = $this->conn->query($userQuery);
        if ($result->num_rows == 1) {
            $data = $result->fetch_assoc();
            return $data;
        } else {
            return false;
        }
    }

    public function update($inputData, $id) {
        $userID = validateInput($this->conn, $id);
        $Emri = $inputData['Emri'];
        $Mbiemri = $inputData['Mbiemri'];
        $passwordi = $inputData['passwordi'];
        $nrTel = $inputData['Nrtel'];
    
        $userUpdatedQuery = "UPDATE userss SET Emri='$Emri', Mbiemri='$Mbiemri', passwordi='$passwordi', nrTel='$nrTel' WHERE id='$userID' LIMIT 1";
        $result = $this->conn->query($userUpdatedQuery);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    

}
?>
