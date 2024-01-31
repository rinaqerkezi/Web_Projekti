<?php 
include "bileta.php";

class Ofertat extends Bileta{
    private $cmimi;
    private $vendi;


    public function __construct($dataArritjes,$dataKthimit,$nrAdults,$nrKids,$cmimi,$vendi){
        parent::__construct($dataArritjes,$dataKthimit,$nrAdults,$nrKids);
        $this->cmimi = $cmimi;
        $this->vendi = $vendi;

    }
    public function getCmimi(){
        return $this->cmimi;
    }
    public function getVendi(){
        return $this->vendi;
    }
    public function setCmimi($cmimi){
        $this->cmimi = $cmimi;
    }
    public function setVendi($vendi){
        $this->vendi = $vendi;
    }
   
    public function __toString(){
        return parent::__toString()." -vendi:".$this->vendi."-cmimi".$this->cmimi;
    }
}
?>