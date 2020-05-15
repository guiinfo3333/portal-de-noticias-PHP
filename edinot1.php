<?php
include 'connection.php';
$idnoti=$_POST['idaltera'];
$texto=$_POST['newtextonoti'];
$sql="
UPDATE `portal`.`noticia` SET `corpo` = '$texto' WHERE `noticia`.`idnoticia` = '$idnoti';";
$res=mysqli_query($con,$sql);
  $ca=mysqli_affected_rows($con);
        if ($ca>0) {
echo "<script>alert('Noticia alterada com sucesso!');</script>";
       }
       else{
       echo "<script>alert('Houve algum erro!');</script>";	
       }

     ?>