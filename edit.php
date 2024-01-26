
<?php
include 'PerdoruesitRepository.php';
$id = $_GET['id'];//e merr id e studentit prej url

$strep = new PerdoruesitRepository();
$perdorues = $strep->getStudentById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edit User</h3>
    <form action="<?php echo $SERVER['PHP_SELF']?>" method="post">
     <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
        <input type="text" name="emri"  value="<?php echo $perdorues['Emri']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
        <input type="text" name="mbiemri"  value="<?php echo $perdorues['Mbiemri']?>"> <br> <br>
        <input type="text" name="emaili"  value="<?php echo $perdorues['Emaili']?>"> <br> <br>
        <input type="password" name="password"  value="<?php echo $perdorues['Password']?>"> <br> <br>
        <input type="cpassword" name="cpassword"  value="<?php echo $perdorues['cPassword']?>"> <br> <br>
        <input type="text" name="gjinia"  value="<?php echo $perdorues['Gjinia']?>"> <br> <br>
        <input type="tel" name="nrtel"  value="<?php echo $perdorues['NrTelefonit']?>"> <br> <br>
        
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $perdorues['Id']; //merret nga studenti me siper
    $emri = $_POST['emri']; //merret nga formulari
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['emaili'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gjinia = $_POST['gjinia'];
    $nrtel = $_POST['nrtel'];
    
  

    $strep->editStudent($id,$emri,$mbiemri,$email,$password, $cpassword, $gjinia, $nrtel);
    header("location:perdoruesit.php");
}

?>