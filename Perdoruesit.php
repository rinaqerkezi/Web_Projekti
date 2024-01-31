<?php 


    
include "DatabaseConnection.php";
include_once "PerdoruesitRepository.php";

$strep = new PerdoruesitRepository();
$students = $strep->getAllPerdoruesit();

?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Emaili</th>
        <th>Password</th>
        <th>User Type</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($perdoruesit as $perdorues) { ?> 
            <tr>
                <td><?php echo $perdorues['Id'];?></td>
                <td><?php echo $perdorues['Emri'];?></td>
                <td><?php echo $perdorues['Mbiemri'];?></td>
                <td><?php echo $perdorues['Emaili'];?></td>
                <td><?php echo $perdorues['Passwordi'];?></td>
                <td><?php echo $perdorues['Gjinia'];?></td>
                <td><?php echo $perdorues['NrTel'];?></td>
                <td>
                    <a href='dashboard.php?id=<?php echo $perdorues['Id']?>'>Edit</a>
                    <a href='dashboard.php?id=<?php echo $perdorues['Id']?>'>Delete</a>
                </td>
            </tr>
        <?php } ?> 
    </tbody>
</table>

</body>
</html>
