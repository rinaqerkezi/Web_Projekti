<?php
    include_once('DatabaseConnection.php');
    class PerdoruesitRepository {
        private $connection;
    
        public function __construct() {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }
    
        public function insertPerdorues($perdorues) {
            $conn = $this->connection;
    
            $emri = $perdorues->getEmri();
            $mbiemri = $perdorues->getMbiemri();
            $emaili = $perdorues->getEmaili();
            $passwordi = $perdorues->getPasswordi();
            $cpassword = $perdorues->getCPassword();
            $gjinia = $perdorues->getGjinia();
            $nrtel = $perdorues->getNrTel();
    
            $sql = "INSERT INTO userss (Emri, Mbiemri, Emaili, Passwordi, CPassword, Gjinia, NrTel) VALUES (?,?,?,?,?,?,?)";
    
            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $mbiemri, $emaili, $passwordi, $cpassword, $gjinia, $nrtel]);
    
            echo "<script>alert('U shtua me sukses!')</script>";
        }
    
        public function getAllPerdoruesit() {
            $conn = $this->connection;
    
            $sql = "SELECT * FROM userss ";
            $result = $conn->query($sql);
    
            $perdoruesit = [];
            while ($row = $result->fetch_assoc()) {
                $perdoruesit[] = $row;
            }
    
            return $perdoruesit;
        }
    
        public function editPerdorues($id, $emri, $mbiemri, $emaili, $passwordi, $cpassword, $gjinia, $nrtel) {
            $conn = $this->connection;
            $sql = "UPDATE userss SET Emri=?, Mbiemri=?, Emaili=?, Passwordi=?, CPassword=?, Gjinia=?, NrTel=? WHERE Id=?";
    
            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $mbiemri, $emaili, $passwordi, $cpassword, $gjinia, $nrtel, $id]);
    
            echo "<script>alert('U ndryshua me sukses!')</script>";
        }
    
        function deletePerdorues($id) {
            $conn = $this->connection;
    
            $sql = "DELETE FROM userss WHERE Id=?";
    
            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }
    
        function getPerdoruesById($id) {
            $conn = $this->connection;
    
            $sql = "SELECT * FROM userss WHERE Id=?";
    
            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $perdorues = $statement->fetch();
    
            return $perdorues;
        }
    }
    
?>