<?php
$username='ramizhoxha03';
$password='ra123456';
if(isset($_POST['submit'])){
$userName=$_POST['perdoruesi'];
$pass=$_POST['fjalkalimi'];
if( $userName==$username and $pass==$password){
setcookie('login', $userName,time()+3600);
setcookie('login', $pass,time()+3600);
header('Location:index.php');
header('Location:login-njoftim.php');
}
}

