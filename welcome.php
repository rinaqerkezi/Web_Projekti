<?php
$username = 'admin';
$password = 'admin123';
session_start();
if(isset($_SESSION['username'])){
    echo "<h1>YOU are login as an: ".$_SESSION['username']."</h1><br>";
    echo "<a href='dashboard.php'>Dashboard</a><br>";
    echo "<br><a href='logout.php'>logout</a>";
} else {
    if($_POST['username']==$user && $_POST['password']==$password){
        $_SESSION['username'] = $user;
        echo "<script>location.href='welcome.php'</script>";
    } else {
        echo "<script>alert('perdoruesi ose fjalkalimi GABIM!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}
?>
