<?php
@include 'dashboard.php';
@include_once 'PerdoruesitRepository.php';
$id = $_GET['id'];

$strep = new PerdoruesitRepository();
$strep->deletePerdorues($id);

header("location:perdoruesit.php");
?>