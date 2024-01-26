<?php
class Perdoruesi{
    private $Id; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Emri;
    private $Mbiemri;
    private $Emaili;
    private $Passwordi;
    private $CPassword;
    private $Gjinia;
    private $NrTel;
   

    public function __construct($e, $m, $em, $p, $cp, $gj, $nrt){
        $this->Emri=$e;
        $this->Mbiemri=$m;
        $this->Emaili=$em;
        $this->Passwordi=$p;
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
    public function setMbiemri($m){
        $this->Mbiemri = $m;
    }

    public function getEmaili(){
        return $this->Emaili;
    }
    public function setEmaili($em){
        $this->Emaili = $em;
    }
    public function getPasswordi(){
        return $this->Password;
    }
    public function setPasswordi($p){
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
    public function setGjinia($gj){
        $this->Gjinia = $gj;
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