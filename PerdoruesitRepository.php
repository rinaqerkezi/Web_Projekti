<?php
    include_once('DatabaseConnection.php');

    class PerdoruesitRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }


        public function insertPerdorues($perdorues){
            $conn = $this->connection;

            $emri = $perdorues->getEmri();
            $mbiemri = $perdorues->getMbiemri();
            $email = $perdorues->getEmaili();
            $passwordi = $perdorues->getPassword();
            $cpassword=$perdorues->getCPassword();
            $gjinia = $perdorues->getGjinia();
            $nrtel = $perdorues->getNrTel();
            

            $sql = "INSERT INTO users (Emri, Mbiemri, Emaili, Passwordi ,CPassword,Gjinia, NrTel) VALUES (?,?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri,$mbiemri,$email,$passwordi, $cpassword, $gjinia, $nrtel]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllPerdoruesit(){
            $conn = $this->connection;
        
            $sql = "SELECT * FROM users ";
            $result = $conn->query($sql);
        
            $perdoruesit = [];
            while ($row = $result->fetch_assoc()) {
                $perdoruesit[] = $row;
            }
        
            return $perdoruesit;
        }
        

        //Pjesa tjeter e funksioneve CRUD: update 
        //dergohet parametri ne baze te cilit e identifikojme studentin (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editPerdorues($id,$emri,$mbiemri,$email,$passwordi, $cpassword, $gjinia, $nrtel){
            $conn = $this->connection;
            $sql = "UPDATE users SET Emri=?,Mbiemri=?, Emaili=?,Passwordi=? ,CPassword=?,Gjinia=?, NrTel=?  WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri,$mbiemri, $email,$passwordi, $cpassword, $gjinia, $nrtel]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        //delete

        function deletePerdorues($id){
            $conn = $this->connection;

            $sql = "DELETE FROM users WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getPerdoruesById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM users WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $perdorues=$statement->fetch();

            return $perdorues;
        }

    }

?>