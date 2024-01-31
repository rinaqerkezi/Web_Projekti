<?php
$user = 'Olsa';
$password = 'Olsa123!';

session_start();

if (isset($_SESSION['user'])) {
    echo "<h1>YOU are logged in as: " . $_SESSION['user'] . "</h1><br>";
    echo "<a href='dashboard.php'>Dashboard</a><br>";
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    if ($_POST['user'] == $user && $_POST['psw'] == $password) {
        $_SESSION['user'] = $user;
        echo "<script>location.href='welcome.php'</script>";
    } else {
        echo "<script>alert('Perdoruesi ose fjalkalimi GABIM!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}
?>
