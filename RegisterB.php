<?php
include_once 'connect.php';
include_once 'Database.php';

class RegisterB {
    public $db;

    public function __construct() {
        $this->db = new DatabaseB();
        $this->db->dbConnect();  
    }

    public function allTickets() {
        $query = "SELECT * FROM bileta"; 
        $result = mysqli_query($this->db->conn, $query);
    
        if (!$result) {
            return false;
        }
    
        return $result;
    }

    public function addTicket($data) {
       
        $dataArritjes = isset($data['dataArritjes']) ? mysqli_real_escape_string($this->db->link, $data['dataArritjes']) : '';
        $dataKthimit = isset($data['dataKthimit']) ? mysqli_real_escape_string($this->db->link, $data['dataKthimit']) : '';
        $nrAdults = isset($data['nrAdults']) ? intval($data['nrAdults']) : 0;
        $nrKids = isset($data['nrKids']) ? intval($data['nrKids']) : 0;

        $query = "INSERT INTO `bileta`(`dataArritjes`, `dataKthimit`, `nrAdults`, `nrKids`) 
                  VALUES ('$dataArritjes','$dataKthimit',$nrAdults,$nrKids)";
        
       
        $result = $this->db->insert($query);
    
        if ($result) {
            $msg = "Ticket added successfully";
        } else {
            $msg = "Failed to add ticket";
        }

        return $msg;
    }
    
    public function deleteTicket($id) {
        $id = intval($id);
        $query = "DELETE FROM bileta WHERE ID = $id"; 
        $result = $this->db->delete($query);

        if ($result) {
            $msg = "Ticket deleted successfully";
        } else {
            $msg = "Failed to delete ticket";
        }

        return $msg;
    }
}
?>