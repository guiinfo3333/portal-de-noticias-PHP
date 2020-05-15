<?php

$id=$_GET['id'];
include 'connection.php';
$sql="select corpocomentario,idcomentario from comentario where idcomentario='$id'";
$res=mysqli_query($con,$sql);
 while($vreg= mysqli_fetch_row($res)){
echo "
<img src='img/xbranco.png' onclick='fechaedit()' id='xbranco' />
<div id='edicaocomtit'>
<h1 id='subtedicao'>Edição de comentários</h1>
<form action='alteracomentario.php' method='POST' id='ditcom'>
<input type='radio' value='$vreg[1]' name='editcomra' style='display:none;' checked>
<textarea cols='55' rows='10' id='textaocomedite' name='textaocomedite'>
$vreg[0]
</textarea>
<input type='submit' value='Enviar' class='subedit'id='edit1' >
<input type='reset' value='Apagar' class='subedit' id='edit2'>
</form>

</div>

";
}
echo "
<script>abreedit();</script>
";


?>