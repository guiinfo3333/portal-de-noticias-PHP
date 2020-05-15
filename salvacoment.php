<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$texto=$_POST['txtcomment'];
$id= $_SESSION['idnoticia'];

if (!isset($_SESSION['nome'])) {
echo "<script>alert('Você precisa está logado para realizar esta ação ou então cadastrar-se no nosso site!');</script>";
     
}else{
include 'connection.php';      
$id= $_SESSION['idnoticia'];
$idusu=$_SESSION['id'];
   $dia=date("d");
  $mes=date("m");
  $ano=date("Y");
 $vartot=$ano.'-'.$mes.'-'.$dia;
$sql= "
INSERT INTO `comentario`(`idcomentario`, `corpocomentario`, `idusuario`, `datacomentario`, `idnoticia`, `validado`) VALUES (null,'$texto','$idusu','$vartot','$id',default);
";	
$res=mysqli_query($con,$sql);
  $ca=mysqli_affected_rows($con);
        if ($ca>0) {
echo "<script>alert('Comentário adicionado com sucesso,espere agora a decisão dos nossos administradores!');</script>";
        }
        else{
        	echo "<script>alert('Erro ao adicionar comentário!');</script>";
        }
}

//agora vai comecar a parte para atualizar a lista de comentario automaticamente com o comentario digitado pelo usuario
//1-para abrir um novo comentario
echo "
<TABLE CELLPADDING=2 id='tabela'>
<TR> 
";

if (isset($_SESSION['nome'])) {   //isso porque se uma sessao estiver configurada é pq ele está logado
  $foto=$_SESSION['fotousu'];
$sexo=$_SESSION['sexo'];
$nome=$_SESSION['nome'];
if (isset($foto) && ($foto!=="")) {
echo "<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='fotousucomum/$foto'></TD>";
}else{ 
if ($sexo=="masculino") {
  echo "<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usuario.png'></TD>";
}else{ 
  echo "<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usufeminino.png'></TD>"; 
}

}

}
if(!isset($_SESSION['nome'])){   //é para quem nao está logado
 echo "<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usuario.png'></TD>";
 echo "<TD><a href='#'></a></TD>";
}  
if (isset($_SESSION['nome'])) {
echo "
<TD><a href='#'>$nome</a></TD>
";
   }               
echo "
</TR>
<TR>
<TD>
<form name='form' id='form' action='salvacoment.php' method='POST'>
<textarea  id='txtarea' name='txtcomment' placeholder='Deixe seu comentário...' onclick='clicar()'></textarea>
<input type='reset' name='excluir' value='Excluir'/>
<input type='submit' name='enviar' value='Enviar' onclick='txtBranco()' />
</form>
</TD>
</TR>
</TABLE>
";
//fim para abrir um novo comentario
//2-aparecer os comentarios feitos pelo o usuario só que nao validados pelo administrador
if (isset($_SESSION['nome'])) {
  # 
include 'connection.php'; 
$id= $_SESSION['idnoticia'];
$idusu=$_SESSION['id'];
$sql= "select u.nome_usuario,c.datacomentario,u.fotousu,c.corpocomentario,u.sexo from comentario as c join usuariocomum as u
on u.idusuario = c.idusuario
join noticia n
on n.idnoticia = c.idnoticia
where n.idnoticia='$id' and u.idusuario='$idusu' and c.validado='0' order by c.idcomentario DESC;";
$res=mysqli_query($con,$sql);
while($chama=mysqli_fetch_row($res)){   
echo utf8_encode("
<TABLE CELLPADDING=2 id='tabela2'>
<TR>
");

if ($chama[2]) {
echo  utf8_encode("
<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='fotousucomum/$chama[2]'></TD>
");
}else{
  if ($chama[4]=="masculino") {
  echo  utf8_encode("
<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usuario.png'></TD>
"); 
  }else{
     echo  utf8_encode("
<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usufeminino.png'></TD>
"); 
  }
}
echo utf8_encode("
<TD><a href='#'>$chama[0]   <span style='color:red;font-size:20px'>nao validado</span></a> </TD>
</TR>
<TR> 
<TD><textarea  id='comentarioP' name='txt_comentarioP' disabled=''>$chama[3]</textarea></TD>
</TR>
</TABLE>
");
}
}
//agora é para incluir os comentários q faltam q sao os validados
include 'connection.php';      
$sql= "select u.nome_usuario,c.datacomentario,u.fotousu,c.corpocomentario,u.sexo from comentario as c join usuariocomum as u
on u.idusuario = c.idusuario
where idnoticia='$id' and validado='1' ORDER BY c.idcomentario DESC;";
$res=mysqli_query($con,$sql);
while($chama= mysqli_fetch_row($res)){   
echo utf8_encode("
<TABLE CELLPADDING=2 id='tabela2'>
<TR>
");
if ($chama[2]) {
echo  utf8_encode("
<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='fotousucomum/$chama[2]'></TD>
");
}else{
  if ($chama[4]=="masculino") {
  echo  utf8_encode("
<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usuario.png'></TD>
"); 
  }else{
     echo  utf8_encode("
<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usufeminino.png'></TD>
"); 
  }
}

echo utf8_encode("
<TD><a href='#'>$chama[0]</a> </TD>
</TR>
<TR> 
<TD><textarea  id='comentarioP' name='txt_comentarioP' disabled=''>$chama[3]</textarea></TD>
</TR>
</TABLE>
");

}
?>