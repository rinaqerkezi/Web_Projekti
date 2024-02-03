<?php 
abstract class Bileta{
    private $dataArritjes;
    private $dataKthimit;
    private $nrAdults;
    private $nrKids;
    private $nrOfertes;


    public function __construct($dataArritjes,$dataKthimit,$nrAdults,$nrKids,$nrOfertes){
        $this->dataArritjes = $dataArritjes;
        $this->dataKthimit = $dataKthimit;
        $this->nrAdults = $nrAdults;
        $this->nrKids = $nrKids;
        $this->nrOfertes = $nrAdults;


    }
    
    public function getDataArritjes(){
        return $this->dataArritjes;
    }
    public function getDataKthimit(){
        return $this->dataKthimit;
    }
    public function getNrAdultsi(){
        return $this->nrAdults;
    }
    public function getNrKids(){
        return $this->nrKids;
    }
    public function getNrOfertes(){
        return $this->nrOfertes;
    }
    public function setDataKthimit($dataKthimit){
        $this->dataKthimit = $dataKthimit;
    }
    public function setNrAdults($nrAdults){
        $this->nrAdults = $nrAdults;
    }
    public function setNrKids($nrKids){
        $this->nrKids = $nrKids;
    }

    public function __toString(){
        return "Personi arrin ne destinacion ".$this->dataArritjes." dhe afati i qendrimit deri me ".$this->dataKthimit." rezervimi me: ".$this->nrAdults."te rritur dhe/ose".$this->nrKids."femije dhe nr ofertes".$this->nrOfertes;
    }
}
?>

