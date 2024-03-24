<?php 
include_once 'Database.php';
include_once 'edit.php';

class UserController {
    private $conn;

    public function __construct() {
        $db = new Database(); 
        $this->conn = $db->dbConnect();
    }

    function create($user){
        $conn = $this->conn;

        $emri = $user->getEmri();
        $mbiemri = $user->getMbiemri();
        $email = $user->getEmail();
        $nrTel = $user->getNrTel();
        $password = $user->getPassword();
        $user_type = $user->getUser_Type();

        $sql = "INSERT INTO userss(Emri, Mbiemri, Emaili, NrTel, Passwordi, user_type) VALUES (?,?,?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$emri, $mbiemri, $email, $nrTel, $password, $user_type]);

        // echo "<script> alert('Register was successful!');</script>";
    }

    function getAllUsers(){
        $conn = $this->conn;

        $sql = "SELECT * FROM userss";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->conn;
        $sql = "SELECT * FROM userss WHERE id=?";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch();

        return $user;
    }

   function update($id, $emri, $mbiemri, $email, $phoneNumber, $password, $user_type){
    $conn = $this->conn;
    $sql = "UPDATE userss SET Emri=?, Mbiemri=?, Emaili=?, NrTel=?, Passwordi=?, user_type=? WHERE id=?";
    
    $statement = $conn->prepare($sql);
    $statement->execute([$emri, $mbiemri, $email, $phoneNumber, $password, $user_type, $id]);

     echo "<script>alert('Update was successful');</script>";
}
}







//function emailExists($email){
//    $conn = $this->conn;
//
//    $sql = "SELECT COUNT(*) FROM userss WHERE Emaili = ?";
//    $statement = $conn->prepare($sql);
//    $statement->execute([$email]);
//    $count = $statement->fetchColumn();
//
//    return ($count > 0);
//}
//
//function usernameExists($emri){
//    $conn = $this->conn;
//
//    $sql = "SELECT COUNT(*) FROM userss WHERE Emri = ?";
//    $statement = $conn->prepare($sql);
//    $statement->execute([$emri]);
//    $count = $statement->fetchColumn();
//
//    return ($count > 0);
//}
//
//function numberExists($nrTel){
//    $conn = $this->conn;
//
//    $sql = "SELECT COUNT(*) FROM userss WHERE NrTel = ?";
//    $statement = $conn->prepare($sql);
//    $statement->execute([$nrTel]);
//    $count = $statement->fetchColumn();
//
//    return ($count > 0);
//}


?>