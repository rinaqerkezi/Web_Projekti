<?php 

include "DatabaseConnection.php";
include_once "PerdoruesitRepository.php";

$strep = new PerdoruesitRepository();
$perdoruesit = $strep->getAllPerdoruesit();

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Emaili</th>
                <th>Pass</th>
                <th>conf pass</th>
                <th>gjinia</th>
                <th>nrtel</th>
                
            </tr>
            </thead>
            <tbody>
                <?php foreach($perdoruesit as $perdorues) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $perdorues['Emri'];?></td>
                        <td><?php echo $perdorues['Mbiemri'];?></td>
                        <td><?php echo $perdorues['Emaili'];?></td>
                        <td><?php echo $perdorues['Passwordi'];?></td>
                        <td><?php echo $perdorues['CPassword'];?></td>
                        <td><?php echo $perdorues['Gjinia'];?></td>
                        <td><?php echo $perdorues['Nrtel'];?></td>
                        <td><a href='edit.php?id=<?php echo $perdorues['Id']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga studenti i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete.php?id=<?php echo $perdorues['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>
    </body>
</html>