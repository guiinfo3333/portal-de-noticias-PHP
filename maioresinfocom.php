<?php
 header("Content-type: text/html ; charset=utf-8",true);
 include('connection.php');
 $var= $_GET['b'];
 $sql="select u.nome_usuario,n.titulo,n.subtitulo,c.corpocomentario from comentario as c join usuariocomum as u
on u.idusuario = c.idusuario
join noticia n
on n.idnoticia = c.idnoticia
where c.idcomentario='$var'";
   $res= mysqli_query($con,$sql); 
       while($vreg= mysqli_fetch_row($res)){
echo utf8_encode("
<input type='checkbox' id='infocom'> <label for='infocom'><img src='img/fechar.png' id='fechimg' onclick='fechavisucom()'></label></input>
        <h1 id='titnoticom'>Titulo da Noticia : $vreg[1] </h1>
        <h1 id='titnoticom1'>Subtitulo da Noticia :$vreg[2]</h1>
      <legend id='comentlegen'>Comentario do Usuario :  <span style='color:green;font-size:21px;'>$vreg[0]</span>      :</legend>
      <textarea id='coment' cols='61' rows='10' disabled>
      $vreg[3]
      </textarea>
");



}

echo "<script>document.getElementById('infomaiorcomentcomen').style.display='block';</script>";


?>