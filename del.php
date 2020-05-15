<?php

//include_once('conect.php');
//include_once('usuarioPerfil.php');
//$checkboxes = isset($_POST['checkbox']);
//$checkboxes = array();
//foreach($checkboxes as $checkbox){
//	echo "<script>alert('adawdwad');</script>";
//    $sql ="delete from comentario where idcomentario=$checkbox;";
//    $res = mysqli_query($link,$sql);
//    $linhas = mysqli_affected_rows($res);
//
//if ($linhas == 1) {
//    echo "<script>alert('registro apagado com sucesso');</script>";
//  
//}
//}
			   include "connection.php";
         $i=0;
               if (isset($_POST['checkbox'])) {
               foreach ($_POST['checkbox'] as $checkboxId) {
                $sql="DELETE FROM comentario WHERE idcomentario = '$checkboxId'";
        $res=mysqli_query($con,$sql);  
        $i=$i+1;           
            }
              echo "<script> alert('$i registros apagados'); </script>";
               }else{
                echo "<script> alert('formulário nao submetido'); </script>";
               }

			   include "usuarioPerfil.php";



?>