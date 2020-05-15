
<?php
header('Content-Type: text/html; charset=utf-8');
include 'connection.php';
$var= $_GET['a']; 
    $res=mysqli_query($con,"select * from usuariocomum where idusuario = $var");
     while($vreg= mysqli_fetch_row($res)){
if ($vreg[5]) {
	echo utf8_encode("
    <input type='checkbox' id='infocom'> <label for='infocom'><img src='img/fechar.png' id='fechimg' onclick='fechavisucom1()'></label></input>
        <div id='foto-usu'><img src='fotousucomum/$vreg[5]'></div>
        <h1>Nome do Usuario : $vreg[1] </h1>
        <h1>E-mail: $vreg[3]</h1>
        <h1>Sexo: $vreg[4]</h1>
        <h1>Senha: $vreg[2]</h1>

");	

}else{
	if ($vreg[4]==='masculino') {
	echo utf8_encode("
    <input type='checkbox' id='infocom'> <label for='infocom'><img src='img/fechar.png' id='fechimg' onclick='fechavisucom1()'></label></input>
        <div id='foto-usu'><img src='img/homemfut.jpg'></div>
        <h1>Nome do Usuario : $vreg[1] </h1>
        <h1>E-mail: $vreg[3]</h1>
        <h1>Sexo: $vreg[4]</h1>
        <h1>Senha: $vreg[2]</h1>

");	
	}else{
			echo utf8_encode("
    <input type='checkbox' id='infocom'> <label for='infocom'><img src='img/fechar.png' id='fechimg' onclick='fechavisucom1()'></label></input>
        <div id='foto-usu'><img src='img/mulherfut.jpg'></div>
        <h1>Nome da Usuaria : $vreg[1] </h1>
        <h1>E-mail: $vreg[3]</h1>
        <h1>Sexo: $vreg[4]</h1>
        <h1>Senha: $vreg[2]</h1>

");	
	}
}

}


echo "<script>document.getElementById('infomaiorcomentusu').style.display='block';</script>";
?>