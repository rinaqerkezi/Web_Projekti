<?php

class SignupContr {

    private $uid;
  
    private $psw;
  

public function __construct($uid,$mid,$email,$psw,$gen,$pid){
   $this->$uid=$uid;
   $this->$mid=$mid;
   $this->$email=$email;
   $this->$psw=$psw;
   $this->$gen=$gen;
   $this->$pid=$pid;



}

private function emptyInput(){
   $result;
    
   if(empty($this->uid)|| empty($this->mid)||empty($this->email)||empty($this->psw)||empty($this->gen)||empty($this->pid)){
     $result=false;
   }else{
    $result=true;
   }
   return $result;

}

}