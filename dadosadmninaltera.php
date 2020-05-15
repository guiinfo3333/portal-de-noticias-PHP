<?php
session_start();
$no=$_POST['nomealter'];
$em=$_POST['emailalter'];
$se=$_POST['senhaalter'];
$idadm=$_SESSION['idadm'];
if ($no!=="") {
include 'connection.php';
$sql="
UPDATE `portal`.`admin` SET `nomeadm` = '$no' WHERE `admin`.`idadm` = '$idadm';";
$res=mysqli_query($con,$sql);
  $ca=mysqli_affected_rows($con);
        if ($ca>0) {
echo "<script>alert('nome alterado com sucesso!');</script>";
       }
       else{
       echo "<script>alert('Houve algum erro!');</script>";	
       }
}
if ($em!=="") {
include 'connection.php';
$sql="
UPDATE `portal`.`admin` SET `emailadm` = '$em' WHERE `admin`.`idadm` = '$idadm';";
$res=mysqli_query($con,$sql);
  $ca=mysqli_affected_rows($con);
        if ($ca>0) {
echo "<script>alert('email alterado com sucesso!');</script>";
       }
       else{
       echo "<script>alert('Houve algum erro!');</script>";	
       }
}
if ($se!=="") {
include 'connection.php';
$sql="
UPDATE `portal`.`admin` SET `senhaadm` = '$se' WHERE `admin`.`idadm` = '$idadm';";
$res=mysqli_query($con,$sql);
  $ca=mysqli_affected_rows($con);
        if ($ca>0) {
   echo "<script>alert('senha alterada com sucesso!');</script>";
       }
       else{
       echo "<script>alert('Houve algum erro!');</script>";	
       }
}
///agora vou atualizar os dados para que admin possa ver
include 'connection.php';
$sql= "select * from admin where idadm='$idadm'";
$res=mysqli_query($con,$sql);
while($vreg= mysqli_fetch_row($res)){
      $nadm=$vreg[1];
       $emadm=$vreg[2];
         $sadm=$vreg[3];
          $seadm=$vreg[4];
          $loadm=$vreg[5];
          echo "
<h1>Nome : <span>$nadm</span></h1>
<h1>Login : <span>$loadm</span></h1>
<h1>Senha : <span>$sadm</span></h1>
<h1>Sexo : <span>$seadm<span></h1>
<h1>Email :<span> $emadm<span></h1>

  ";
}
 $n= explode(" ",$nadm);
  echo "<script>document.getElementById('noneadm').innerHTML = '$n[0]';</script>";


///agora vou atualizar os dados para que admin possa ver

       ?>