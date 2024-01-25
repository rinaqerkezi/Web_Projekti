<?php

class SignupContr extends SignUp{

    private $uid;
   
    private $psw;
  

public function __construct($uid,$psw){
   $this->$uid=$uid;
 
   $this->$psw=$psw;


}

public function loginUser(){
    if($this->emptyInput()==false){
        //echo "Empty input!"
        header("location:../index.php?error=emptyInput");
        exit();
    }
    $this->getUser($this->uid,$this->psw);
}

private function emptyInput(){
   $result;
    
   if(empty($this->uid)|| empty($this->psw)){
     $result=false;
   }else{
    $result=true;
   }
   return $result;

}

}