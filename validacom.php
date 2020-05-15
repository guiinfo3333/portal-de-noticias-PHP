<?php

include('connection.php');
$vali=0;
$nega=0;

foreach($_POST['valcom'] as $checkbox){
	$sql="select * from comentario where idcomentario=$checkbox";
    $res= mysqli_query($con,$sql);
	   while($vreg= mysqli_fetch_row($res)){
	 
if ($vreg[5]==1) {
	
	$sql1="UPDATE `comentario` SET `validado`=0 WHERE idcomentario=$checkbox";
    $res1= mysqli_query($con,$sql1);
    echo "<script>alert('um comentario negado com sucesso!');</script>";
}else{
$sql1="UPDATE `comentario` SET `validado`=1 WHERE idcomentario=$checkbox";
   $res1= mysqli_query($con,$sql1);
    echo "<script>alert('um comentario  validado com sucesso!');</script>";
}
	   }


}
mysqli_close($con);
//agora inclui a parte nova dos comentaarios
include('connection.php');

$sql3="select c.idcomentario,u.nome_usuario,c.datacomentario,n.titulo,c.corpocomentario,c.validado from comentario as c join usuariocomum as u
on u.idusuario = c.idusuario
join noticia n
on n.idnoticia = c.idnoticia
order by c.idcomentario DESC;";
    $res3=mysqli_query($con,$sql3);


   
    echo '
  
       <table class="tabelaEditavel">
        <thead>
              <tr>
                <th>Visualizar</th>
                <th> <center>Marcado </center></th>
                <th>nome do usuario</th>
                <th>Data do comentário</th>
                <th>título da notícia</th>
                <th>validado</th>
            </tr>
        </thead>
        <tbody>
         
            ';

             while($vreg3= mysqli_fetch_row($res3)){
             $dta=explode('-',$vreg3[2]);
            echo "
            <tr>
               <td><center><a id='valcomlink' href='#?a=$vreg3[0]'>abrir</a></center></td> 
                <td><center><input type='checkbox' value='$vreg3[0]' name='valcom[]'></center></td>
                <td>$vreg3[1]</td>
                <td>$dta[2]/$dta[1]/$dta[0]</td>
                <td>$vreg3[3]</td>
               
            
            ";
             if($vreg3[5]==1){
                echo "<td>validado</td></tr>";
              }else{
                echo "<td>negado</td></tr>";
              }
            }

            echo "
            </tbody>
        </table>
    ";


?>