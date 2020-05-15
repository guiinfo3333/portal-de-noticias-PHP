<?php header("Content-type: text/html ; charset=utf-8",true);?>
<html>
<head>
	<title>Notícias</title>
	<link rel="stylesheet" href="stylesecunoti.css" type="text/css"/>
<script src="jquery/jquery-3.3.1.min.js"></script>
<script>

   $("#fotobolalogo").css('display', 'none');
</script>
<style type="text/css">
#sessaologin{
display:none;
  }
  #menu_em_cima{height:90px; }
  .menu-icon{ top:20px;  }
  .menu{top:80px; }
  #leg{top:34px;   }
  .acesso #aces_ul{position:fixed;}
  #sessaologin{position:fixed;}
  #fotousu{
  top:13px;
    border:3px solid red;
    width:50px;
    height:50px;
    float:right;
   position:relative;
    right:15px;
    background-size:cover;
    border-radius:13px;

}
#nomeusu{
  position:absolute;
  color:red;
  left:-140px;
  top:13px;
  font-size:30px;
  font-family:arial;
}
#fotousu  #menulog{display:none;position:relative;top:60px;width:200px;background-color:white;right:100px;z-index:60;left:-150px;text-align: center;list-style:none;}
#fotousu  #menulog li{ border:1px solid black;overflow:normal}
#fotousu #menulog li a:hover{color:blue;}
#fotousu  #menulog li a{ padding-bottom:2px; text-decoration:none;font-size:15px;color:blue}
#bug{position:absolute;left:600px;z-index:30;color:white;font-family:arial;font-size:27px;top:30px;}
#fotobolalogo{position:absolute;top:0px;width:250px;height:80px;left:380px;animation-name:anime2;animation-duration:2s;animation-timing-function:linear;animation-delay:1s;}

</style>
</head>
<body>
	
	 <?php
 
 session_start();
$id=$_GET['id'];
  $_SESSION['idnoticia']=$id;
  ?>

<!-- ======================================================= AQUI COMEÇA O MENU DO SITE ========================================================= -->
<header id="menu_em_cima">
  <img src="fotobola.jpg" id="fotobolalogo"/>
   <h1 id="bug">www.FutebolBugadown.com</h1>
    <?php
    if (isset($_SESSION['nome'])) {

$nomevarn=explode(" ",$_SESSION['nome']);
$ftdusu=$_SESSION['fotousu'];
if ($_SESSION['fotousu']) {
  echo "<style> #fotousu{background-image:url('fotousucomum/$ftdusu');}</style>";
}else{
  if ($_SESSION['sexo']=="masculino") {
      echo "<style> #fotousu{background-image:url('img/usuario.png');background-color:white;}</style>";
  }else{ echo "<style> #fotousu{background-image:url('img/usufeminino.png');background-color:white;}</style>";                           }
}
    echo "
  <div id='fotousu' onclick='ak()'>
  <h1 id='nomeusu'>$nomevarn[0],</h1>
  <ul id='menulog'  onMouseOver='ak()' onMouseOut ='saimenuusuario()'>
<li><a href='#'>Alterar suas informações</a></li>
<li><a href='acabarsessao.php'>Sair</a></li>
  <ul>
  </div>
  ";
    }
 ?>

        <input type="checkbox" id="chk">
        <label for="chk" class= "menu-icon" onMouseOver="mouseicone()" onMouseOut="sairmouseincone()" >&#9776;</label>
        <div class ="bg"></div>
    <h1 id="leg">MENU</h1>
     <!-- <img src= "img/logo.png " id="logo"/>-->
    
  <!--acesso criado -->
  <!--tela para entrar e se cadastrar-->
 
 

        <nav class="menu" id="principal" onMouseOver="passarmouseprincipal()" onMouseOut="tirarpassarmouseprincipal()">
            <ul id="ul_menu">
                <li id=""><a href="" class="voltar">Voltar</a></li>
                <li id="home" onMouseOver="saisecun()"><a href="noticianews.php">Home</a></li>
                <li id="fut"  onMouseOver="pegaid(this.id)"  ><a href="futebol.html">Futebol</a></li>
                <li id="bas" onMouseOver="pegaid(this.id)" ><a href="">Basquete<span>+</span></a></li>  <!--coloquei o # para direcionar ao outros menu para a propriedade target-->
                <li id="nat" onMouseOver="pegaid(this.id)"><a href="">Natação</a></li>
                <li id="lut"  onMouseOver="pegaid(this.id)"><a href="#contato">Lutas<span>+</span></a></li>
            </ul>
        </nav>
        <!--criando uma outra nav com as mesmas característica só q será o=submenu-->
        <nav class="menu fica" id="basquete" onMouseOver="permaneceprin()"  >
            <ul id="ul_menu">
              <li><a href="" class="voltar">Voltar</a></li>
              <li><a href="">Noticias principais</a></li>
              <li><a href="">Campeonatos</a></li>   
              <li><a href="https://www.google.com.br/">Acesse o Google</a></li>   
            </ul>
        </nav>
        
         <nav class="menu fica" id="natacao" onMouseOver="permaneceprin()" >
            <ul id="ul_menu">
              <li><a href="#principal" class="voltar">Voltar</a></li>
             <li><a href="">100 m </a></li>
              <li><a href="">200 m</a></li>   
              <li><a href="">300 m</a></li>   
            </ul>
        </nav>
          <nav class="menu fica" id="futebol" onMouseOver="permaneceprin()">
            <ul id="ul_menu">
              <li><a href="#principal" class="voltar">Voltar</a></li>
             <li><a href="">Brasileirao</a></li>
              <li><a href="">Copa do brasil</a></li>   
              <li><a href="">Twitter</a></li>   
            </ul>
        </nav>
          <nav class="menu fica" id="luta" onMouseOver="permaneceprin()">
            <ul id="ul_menu">
              <li><a href="#principal" class="voltar">Voltar</a></li>
             <li><a href="">MMA</a></li>
              <li><a href="">ufc</a></li>   
              <li><a href=""></a></li>   
            </ul>
        </nav>
        </header>
 <?php
     if (!isset($_SESSION['id'])) {  //para sumir com o menu quando estiver logado
      echo "
        <div class = 'acesso' id='acesso1'>
    <ul id='aces_ul'>
    <li><a href='cadastro.php'>Cadastre-se</a></li>
    <li onclick='abreaces()''>Acessar conta
    </li>
  </ul>
    <ul id='sessaologin' onmouseout ='saices()'' onmouseover='abreaces()''>
     <li ><a href='login.php'>Usuário</a></li>
      <li><a href='loginadm.php'>Administrador</a></li>
    </ul>
  </div>
      ";
     }
    ?>
<!-- ======================================================= AQUI TERMINA O MENU DO SITE ========================================================= -->

<!-- ======================================================= AQUI COMEÇA A ÁREA DAS NOTÍCIAS ========================================================= -->

<?php
include 'connection.php';
$id=$_GET['id'];
      $res1= mysqli_query($con,"SELECT * FROM noticia where idnoticia='$id'");
              $oi= mysqli_affected_rows($con);
              $i=1;
              while($vrega= mysqli_fetch_row($res1)){
             
                  $dta=$vrega[1];
                    $aut=$vrega[2];
                      $font=$vrega[3];
                       $img=$vrega[5];
                        $tit=$vrega[6];
                        $sit=$vrega[7];
                         $corpo=$vrega[8];

              }
?>
<div class="principal">

	<header>
		<h1><?php echo utf8_encode("$tit");?></h1> 
		<h2><?php echo utf8_encode("$sit");?></h2>
		<h5 id="subtitulo3">Autor: <?php echo utf8_encode("$aut");?></h5>
		<h5 id="subtitulo3">Fonte: <?php echo utf8_encode("$font");?></h5>
		<h5 id="subtitulo4">Categoria: Futebol</h5>
		<h5 id="subtitulo5"><?php echo utf8_encode("$dta");?></h5>
	</header>
<hr></hr>
	<div class="news"> <!-- DIV NEW-->
<img id="imgNews" src="fotonoticia/<?php echo "$img";?>"/>

		<h6 id="news"><?php echo "$corpo"." .";?>
		</h6>
<!-- ======================================================= AQUI TERMINA A ÁREA DE NOTÍCIAS ========================================================= -->


<!-- ======================================================= AQUI COMEÇA A ÁREA DE COMENTÁRIO ========================================================= -->

<button class="barraComent" onclick="clicar()" ondblclick="dobroclick()"> <center><h2 style="position:absolute; left:25%;font-size:35;margin-top:13px;">Click aqui para Comentar<h2><img id="png" src="img/comentar.png"/></center></button>
<TABLE CELLPADDING=2 id='tabela'>
<TR> 
<?php 
if (isset($_SESSION['fotousu'])) {   //isso porque se uma sessao estiver configurada é pq ele está logado
 

$foto=$_SESSION['fotousu'];
$sexo=$_SESSION['sexo'];
$nome=$_SESSION['nome'];

if ($foto) {
echo "<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='fotousucomum/$foto'></TD>";
}else{
if ($sexo=="masculino") {
  echo "<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usuario.png'></TD>";
}else{ echo "<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usufeminino.png'></TD>"; }

}
echo "
<TD><a href='#'>$nome</a></TD>
";
}else{
 echo "<TD ROWSPAN=2 width=100><img id='FotoPerfil' src='img/usuario.png'></TD>";
 echo "<TD><a href='#'></a></TD>";
}                 
echo "
</TR>
<TR>
<TD>
<form name='form' id='form' action='' method='POST'>
<textarea  id='txtarea' name='txtcomment' placeholder='Deixe seu comentário...' onclick='clicar()'></textarea>
<input type='reset' name='excluir' value='Excluir'/>
<input type='submit' name='enviar' value='Enviar' onclick='txtBranco()' />
</form>
</TD>
</TR>
</TABLE>
";
?>

<?php
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
?>
<?php
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
?>
<?php
echo utf8_encode("
<TD><a href='#'>$chama[0]</a> </TD>
</TR>
<TR> 
<TD><textarea  id='comentarioP' name='txt_comentarioP' disabled=''>$chama[3]</textarea></TD>
</TR>
</TABLE>
");
}
mysqli_close($con);
?>




<script>


// ======= FUNÇÃO PARA TESTAR SE O USUÁRIO ESTÁ LOGADO PARA PODER COMENTAR LIVREMENTE (AINDA FALTA ALGUNS AJUSTES!!!) ========== //
function clicar(){
	var login = "Rafael Leonan";
	var senha = "123";
	var senhaOriginal = "123";               //document.getElementById('senha').value;//
	var loginOriginal = "Rafael Leonan";		//document.getElementById('login').value;//
	if((login == loginOriginal) && (senha == senhaOriginal)){
		var ca = document.getElementById('tabela'); 
		ca.style.display = 'block';
		return true;
	}else{
		alert("Você só pode comentar se estiver logado!\nSe não tiver um conta, cadastre-se gratis.");
		ca.style.display = 'none';
	}
}
function dobroclick(){
      var ca = document.getElementById('tabela'); 
    ca.style.display = 'none';
}
// ================ FIM DA FUNÇÃO PARA TESTAR SE O USUÁRIO ESTÁ LOGADO PARA PODER COMENTAR LIVREMENTE ========================= //

// ======= FUNÇÃO PARA NÃO DEIXAR O USUÁRIO ENVIAR E PUBLICAR UM COMENTÁRIO EM BRANCO(AINDA FALTA ALGUNS AJUSTES!!!) ======= //

function txtBranco(){
var txt = document.getElementById('txtarea').value;
if(txt == ""){
alert("Você não digitou nada ainda!");
return true;
}
}
// ================ FIM DA FUNÇÃO PARA NÃO DEIXAR O USUÁRIO ENVIAR E PUBLICAR UM COMENTÁRIO EM BRANCO ======================== //
</script>
</div> <!-- FIM DA DIV NEWS-->
</div> <!-- FIM DA DIV PRINCIPAL-->
<!-- ======================================================= AQUI TERMINA A ÁREA DE COMENTÁRIO ========================================================= -->

<!-- ======================================================= AQUI COMEÇA A ÁREA DE + NOTÍCIAS, QUE FICA DO LADO DIREITO DA PÁGINA HTML================== -->

<div class="news2">
	<center><b><i style="font-size:25;color:green;">+Notícias</i></b></center>
	<nav id="n2">
    <ul>
        <li><a href="#">São Paulo treinador novo...</a></li>
        <li><a href="#">Palmeiras a um passo de...</a></li>
        <li><a href="#">Corinthians contra o Z4...</a></li>
        
    </ul>     
</nav>
</div>
<!-- ======================================================= AQUI TERMINA A ÁREA DE + NOTÍCIAS ========================================================= -->

<!-- ======================================================= AQUI COMEÇA A ÁREA DE NOTÍCIAS +VISUALIZADAS QUE FICA DEBAIXO DA +NOTÍCIAS NO HTML========= -->

<div class="news3">
	<center><b><i style="font-size:25;color:green;">Notícias +Visualizadas</i></b></center>
	<nav id="n2">
    <ul>
        <li><a href="#">O Profeta está de volta...</a></li>
        <li><a href="#">Palmeiras hexa campeão...</a></li>
        <li><a href="#">Corinthians 3° rebai...</a></li>
        
    </ul>     
</nav>
</div>
<!-- ======================================================= AQUI TERMINA A ÁREA DE NOTÍCIAS +VISUALIZADAS ============================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  fut=  document.getElementById("futebol");
  nat=  document.getElementById("natacao");
  lut=  document.getElementById("luta");
  bas=document.getElementById("basquete");
  prin=document.getElementById("principal");
  icon=document.getElementsByClassName("menu-icon");
  home=ducument.getElementById("home");

  function mouseicone(){
  	//var x = document.getElementsByClassName("example");
  	prin.style.transform = "translateX(300px)";
  }

function sairmouseincone(){
 prin.style.transform = "translateX(-300px)";

  }
  function passarmouseprincipal(){
  	 	prin.style.transform = "translateX(300px)";
  }
   function tirarpassarmouseprincipal(){
      prin.style.transform = "translateX(-300px)";

  }
 
  function pegaid(a){
 
//prin.style.transform = "translateX(300px)"; alert(a);


if(a=="nat"){

nat.style.display="block";
fut.style.display="none";
bas.style.display="none";
lut.style.display="none";
}

if(a=="fut"){

fut.style.display="block";
nat.style.display="none";
bas.style.display="none";
lut.style.display="none";
}
if(a=="bas"){
bas.style.display="block";
fut.style.display="none";
nat.style.display="none";
lut.style.display="none";

}
if(a=="lut"){
lut.style.display="block";
bas.style.display="none";
fut.style.display="none";
nat.style.display="none";
}
  }

function permaneceprin(){
prin.style.transform = "translateX(300px)";
}
function saisecun(){
fut.style.display="none";
nat.style.display="none";
bas.style.display="none";
lut.style.display="none";
}

/*script para fazer login e adm*/
function abreaces(){
 a= document.getElementById("sessaologin");
a.style.display ="block";
}
function saices(){
 a= document.getElementById("sessaologin");
a.style.display ="none";
}


function ak(){
a=document.getElementById("menulog");
a.style.display="block";
}
function saimenuusuario(){
a=document.getElementById("menulog");
a.style.display="none";
}
 $(document).ready(function(){
    $(document).on('submit','#form',function(event){
        event.preventDefault();
        var dados=$(this).serialize();

        $.ajax({
            url: 'salvacoment.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#showusu').html(data);
            }
        });
    });


});



</script>

 <script type="text/javascript">$("#fotobolalogo").css('display', 'none');</script>
</body>
</html>