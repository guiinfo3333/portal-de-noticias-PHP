<?php
session_start();
  $a=$_POST['checkview'];

if (isset($_SESSION['id']) ){   //qualquer sessao aberta é porque o cidadao ta logado
 $idusuario=$_SESSION['id'];
include 'connection.php';
$sql="select * from noticia where idnoticia='$a'";
 $res=mysqli_query($con,$sql);
 $qtd;
   while($vreg= mysqli_fetch_row($res)){
$qtd=$vreg[4];
   }
  $qtd=$qtd+1;
//  echo "<script>alert($qtd);</script>";
 $sql1="UPDATE `portal`.`noticia` SET `viewsnoticia` = '$qtd' WHERE `noticia`.`idnoticia` ='$a';";
 $sql2="INSERT INTO `portal`.`ler` (`idnoticia`, `idusuario`) VALUES ('$a', '$idusuario');";
  $res1=mysqli_query($con,$sql1);
   $res2=mysqli_query($con,$sql2);
   $ca=mysqli_affected_rows($con);
        if ($ca>0) {
        		  echo "<script>alert('Noticia visualizada com sucesso!');</script>";
        }else{
        	 echo "<script>alert('Erro ao visualiar noticia!');</script>";
        }
   echo "<script>window.location.href='secundarianoti.php?id=$a';</script>";
}
    
else{
	  echo "<script>alert('Voce precisa esta logado para desenvolver esta acao!');</script>";
	        echo "<script>window.location.href='secundarianoti.php?id=$a';</script>";
}




?>