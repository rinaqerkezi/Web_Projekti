<?php
include_once 'PerdoruesitRepository.php';
$id = $_GET['id'];//e merr id prej url

$strep = new PerdoruesitRepository();
$strep->deleteStudent($id);

header("location:perdoruesit.php");
?>