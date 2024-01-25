<?php
if (isset($_POST["submit"]))
{

    $uid =$_POST["emri"];
    $mid =$_POST["mbiemri"];
    $email =$_POST["email"];
    $psw =$_POST["password"];
    $gen =$_POST["gender"];
    $pid =$_POST["phoneNumber"];


    include "signup.classes.php";
    include "signup-contr.classes.php";
    $signup =new SignupContr($uid,$mid,$email,$psw,$gen,$pid);








}



?>