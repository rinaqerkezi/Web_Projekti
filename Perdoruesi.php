<?php
class Perdoruesi{
    private $Id; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Emri;
    private $Mbiemri;
    private $Emaili;
    private $Password;
    private $CPassword;
    private $Gjinia;
    private $NrTel;
   

    public function __construct($e, $m, $em, $p, $cp, $gj, $nrt){
        $this->Emri=$e;
        $this->Mbiemri=$m;
        $this->Emaili=$em;
        $this->Password=$p;
        $this->CPassword=$cp;
        $this->Gjinia=$gj;
        $this->NrTel=$nrt;
        
    }
    
    public function getEmri(){
        return $this->Emri;
    }
    public function setEmri($e){
        $this->Emri = $e;
    }

    public function getMbiemri(){
        return $this->Mbiemri;
    }
    public function setMbiemri($e){
        $this->Mbiemri = $e;
    }

    public function getEmaili(){
        return $this->Emaili;
    }
    public function setEmaili($e){
        $this->Emaili = $e;
    }
    public function getPassword(){
        return $this->Password;
    }
    public function setPassword($p){
        $this->Password = $p;
    }
    public function getCPassword(){
        return $this->Password;
    }
    public function setCPassword($cp){
        $this->CPassword = $cp;
    }


    public function getGjinia(){
        return $this->Gjinia;
    }
    public function setGjinia($e){
        $this->Gjinia = $e;
    }

    public function getNrTel(){
        return $this->NrTel;
    }
    public function setNrTel($nrt){
        $this->NrTel = $nrt;
    }

    public function __toString(){
        return "Emri: ".$this->Emri." dhe mbiemri ".$this->Mbiemri;
    }
}
?>