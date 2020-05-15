<?php
session_start();
include 'connection.php';
$idcom=$_POST['editcomra'];
$new=$_POST['textaocomedite'];

$sql="
UPDATE `portal`.`comentario` SET `corpocomentario` = '$new' WHERE `comentario`.`idcomentario` = '$idcom';";
$res=mysqli_query($con,$sql);
  $ca=mysqli_affected_rows($con);
        if ($ca>0) {
echo "<script>alert('Comentario alterado com sucesso!');</script>";
       }
       else{
       echo "<script>alert('Houve algum erro!');</script>";	
       }
//geraaaaaaaaaandooo a tabela novamente sem refresh/////
echo "

<form name='form1' action='del.php' method='POST' id='form1'>
<table id='delet'>
    <CAPTION><center id='dadosAtuais'>Meus Comentários</center><input type='submit' value='deletar' name='deletar'><input type='reset' value='desmarcar' name='reset'></CAPTION>
<thead>
<div id='resultado1'>
<th align='center'>Edicao</td>
<th align='center'>Marcado</td>
<th align='center'>Comentário</td>
<th align='center'>Nome</td>
<th align='center'>Data</td>     
<th align='center'>título da Noticia</td>
<th align='center'>Situação</td>     
</thead>
<tbody>

";
$idusu=$_SESSION['id'];
include "connection.php";
$cmd = "select c.idcomentario,c.corpocomentario,u.nome_usuario,c.datacomentario,n.titulo,n.subtitulo,c.validado from comentario as c join usuariocomum as u
on u.idusuario = c.idusuario
join noticia n
on n.idnoticia = c.idnoticia
where c.idusuario='$idusu' order by c.idcomentario DESC";
$res = mysqli_query($con,$cmd);
//$sql->execute();
//$sql->bind_result($id,$nome,$email,$senha,$sexo,$login,$fotoadm);
 while($vreg= mysqli_fetch_row($res)){
  $dta=explode('-',$vreg[3]);
    echo  utf8_encode("
       <tr>
            <td align=center><a href='editPerfil.php?id=$vreg[0]'>Editar</a></td>
            <td align=center><input type='checkbox' value='$vreg[0]' name='checkbox[]' id='checkbox[]'/></td>
            <td align=center>$vreg[1]</td>
            <td align=center>$vreg[2]</td>
            <td align=center>$dta[2]/$dta[1]/$dta[0]</td>
           <td align=center>$vreg[4]</td>

        ");
       if ($vreg[5]) {
           echo "
            <td align=center>validado</td>
        </tr>";
       }else{
echo "
            <td align=center>negado</td>
        </tr>";
       }
         
}

echo "
</tbody>
</table>
</form>
";


?>