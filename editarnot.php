<?php
session_start();
include 'connection.php';
$id= $_GET['idnoti'];
$sql="select * from noticia where idnoticia='$id'";
$res=mysqli_query($con,$sql);
  while($vreg= mysqli_fetch_row($res)){
echo "
<img src='img/xbranco.png' onclick='fechaedit1()' id='xbranco'/>
<div id='edicaocomtit'>
<h1 id='subtedicao1'>Edição da Noticia</h1>
<form action='edinot1.php' method='POST' id='ditnoti'>
<h1 id='altercorpo'>Corpo da noticia :</h1>
<input type='radio' value='$vreg[0]' style='display:none;' name='idaltera' checked>
<textarea cols='55' rows='10' id='textaocomedite' name='newtextonoti'>
$vreg[8]
</textarea>
<input type='submit' value='Enviar' class='subedit'id='edit1' >
<input type='reset' value='Apagar' class='subedit' id='edit2'>
</form>
</div>
";

  }

?>
<script>
abreedit1()
</script>