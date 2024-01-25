<?php




$username='';
setcookie("Luxury Heavens",$username,time()+30*24*60*60);
echo $_COOKIE["Luxury Heavens"]."<br>";

if(isset($_COOKIE["emri"])){
echo "Mire se ktheheni ne Luxury Heavens:".$_COOKIE["emri"];

}else

echo "Mire se vini ne Luxury Heavens";

setcookie("Luxury Heavens"," ",time()-30*24*60*50);

