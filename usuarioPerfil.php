<html>
<head>
<title>Perfil Usuário Comum</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style>
#fotobolalogo{position:absolute;top:0px;width:250px;height:80px;left:380px;animation-name:anime2;animation-duration:2s;animation-timing-function:linear;animation-delay:1s;}
#bug{position:absolute;left:600px;z-index:30;color:white;font-family:arial;font-size:27px;top:30px;}
*{
    margin:0;
    padding:0;

}
@keyframes anime2{
  0%{
   left:-600px;

  }
  50%{
     left:600px;
  }
  
  100%{
  left:210px;
  }
}
#nomeusu{
  position:absolute;
  color:red;
  left:-130px;
  top:10px;
}
/*fotototototoo usususuus*/
#fotousu{
  top:10px;
    border:3px solid red;
    width:50px;
    height:50px;
    float:right;
   position:relative;
    right:15px;
    background-size:cover;
    border-radius:13px;

}
#fotousu  #menulog{
  display:none;
position:relative;
top:60px;
width:200px;
background-color:white;
right:100px;
z-index:60;
left:-150px;
text-align: center;
list-style:none;
}
#fotousu  #menulog li{
  border:1px solid black;
}
#fotousu #menulog li a:hover{
color:blue;
}
#fotousu  #menulog li a{
  padding-bottom:2px;
  text-decoration:none;
}
a{
   text-decoration:none;
}
a:hover{
  color:red;
  text-shadow:1px 2px 3px red;

}
/*fotototototoo usususuus*/
/*===================================menu============================================*/
    #menu_em_cima{   /*o header*/
    width:100%;
    height:80px;       /*so o header*/
    top:0px;
    left:0;
    background-color:black;
    position:fixed;
    z-index:11;
   

}
.menu-diferente{   /*menu para quando rolar a pagina*/
    width:100%;
    height:150px;       
    top:0px;
    left:0;
    background-color:red;
    position:absolute;
    z-index:11;
    position: fixed;

}
.menu-icon{
  position:absolute;
  font-size:25px;
  font-weight:bold;      /*o simbolo do menu*/
  padding:5px;
  width:40px;
  height:40px;
  text-align:center;
  background-color:white;
  color:#190707;
  cursor:pointer;
  transition: all 1s;
  left:0px;
  top:20px;    
}/*ola comentario    */
.menu-icon:hover{ /*quando passar o mouse  */
  background-color:#399b72;
  color:blue;    
  transform:rotate(35deg);

}
#chk{   /*o checkbox para aparecer*/
  position:absolute;
  display:none;                    /*esse é o checkbox*/
}
.menu{     /*é o menu principal que é a nav*/
    
    height:50%;
    position:fixed;
    background-color:#399b72;
    top:74px; 
    overflow:hidden; /*tira os pontos da lista*/
    transition:all 1s;
    width:200px;
    left:-300px;  
    z-index: 12;
}

#ul_menu{    /*esse "ul_menu" é para os uls relacionado as navs do menu*/
    list-style:none;
}

#ul_menu li a{
    display:block;          /*caracteristicas para os links*/
    font-size:18px;
    font-family:'Arail';
    padding:10px;            
    border-bottom:solid 1px #000;
    color:#ccc;
    text-decoration:none;
    transition:all.1s;

}
#ul_menu li span{            /*para o "+ "*/
    float:right;
    padding-right:10px;
}
#ul_menu li a:hover{
  background-color:white;
border-right: solid 5px black;
    
}
.voltar{
    margin-top:60px;
    background-color:#111;
    border-left:solid 5px #444;
}


.bg{
    width:100%;
    height:100%;
    left:0;
    top:0;
    position:fixed;
    background-color:rgba(0,0,0,.6);   /*dá uma escurecida*/
    display:none;  /*nao aparece nada ainda,só irá aparecer dps do evento,aí escurecerá*/
}
#chk:checked ~.bg{
  /*  display:block;      /*agora sim a div ocupa todo o espaco r*/
    
}
  /*estilizando agora as novas nav*/
  #futebol{
      width:200px;
      left:201px;
       display: none;  
  }
  #basquete{
     width:200px;
     left:201px;
       display: none; 
  }
    #luta{
     width:200px;
     left:201px;
   display: none;  
  }
  #natacao{
     width:200px;
     left:201px;
     display: none;

       }
  /*#zz:hover #cursos{
      width:200px;
  }
  */
 /*
  #cursos:target,   
  #contato:target{
    position:fixed;
     width:200px;

    /* transform:translateX(250px);*/
     
     
  
  
  
    /* pesquisa*/
.pesquisa1{
position:absolute;
width:400px;                  /*cacterísticas da pesquisa*/
height:50px;
top:100px;
left:85%;
}
.pesquisa{
position:absolute;
width:400px;                  /*cacterísticas da pesquisa*/
height:50px;
top:100px;
left:85%;


}
#texto{

width:100px;       /*carac do input*/
height:40px;
float:left;
color:black;
font-family: 'Arial ';
font-size:15px;
background-color:rgb (0, 230, 230);
}
.btn{
width:30px;
height:30px;         /*imagem da lupa*/
background-color:#2b2727;
padding : 5px 10px;
cursor : pointer;
}
#texto:focus{

border : solid 2px #2f4550;
width:140px;



}

/*terminou-*/
/*o nome do "menu" */
body{
	background-image: linear-gradient(white,black);
}
#foto-da-noticia{
left:8%;
position: absolute;
width:1300px;
background-color:white;
padding-bottom: 5px;
margin-bottom: 30px;
top:100px;
border-radius:10px;
}
#tii{
top:30px;
left:5px;
position:relative;
text-shadow: 2px 2px black;
color:white;
font-size: 20;
}
input[type="file"]{
width:200px;
height:300px;
position:relative;
left:8%;
border:solid 1px black;
display:none;
top:80px;
}
#label{
width:200px;
height:300px;
position:absolute;
left:8%;
border:solid 1px black;
top:80px;

}
.thumb-image{
width:200px;
height:300px;
position:relative;
}
.title{
	color:black;
	font-size: 30;
	font-family:arial;
	left:40%;
	position: absolute;
	margin-top:5px;
}
.title:hover{
	color:white;
	text-shadow:2px 2px 5px black;
}
table#form{
    position: absolute;
    width: 400px;
    height: 200px;
    top:100px;
    float:right;
    right: 12%;
    background-color: white;
	border-radius: 10px;
}
table#form2{
    position: absolute;
    width: 350px;
    height: 200px;
    top:110px;
    float:left;
    left: 28%;
    background-color: white;
	border-radius:10px;
}
#dadosAtuais{
    color:black;
    font-family:arial;
    font-size: 20;
    margin-bottom: 10px;
    display: inline;
}
#dadosAtuais:hover{
    color:white;
    text-shadow:2px 2px 5px black;
}
input[type="text"]{
    width: 300px;
    border-radius: 25px;
    padding-right: 10px;
    padding-left: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    outline: none;
    display: inline;
    float:right;
}
input[type="password"]{
    width: 300px;
    border-radius: 25px;
    padding-right: 10px;
    padding-left: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    outline: none;
    display: inline;
    float:right;   
}
input[type="Email"]{
    width: 300px;
    border-radius: 25px;
    padding-right: 10px;
    padding-left: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    outline: none;
    display: inline;
    float:right;
}
input[type="submit"]{
    margin-top: 10px;
    border-radius: 25px;
    outline: none;
    background-color:white;
    color:black;
    cursor: pointer;
    display: inline;
    float:right;
    margin-bottom: 5px;
}
input[type="submit"]:hover{
    border-radius: 25px;
    outline: none;
    background-color:black;
    color:white;
}
input[name="deletar"]{
    margin-top: 10px;
    border-radius: 25px;
    outline: none;
    background-color: white;
    color:black;
    cursor: pointer;
    display: inline;
    float:left;
    margin-bottom: 5px;
}
input[name="reset"]{
    margin-top: 10px;
    border-radius: 25px;
    outline: none;
    background-color: white;
    color:black;
    cursor: pointer;
    display: inline;
    float:left;
    margin-bottom: 5px;
    margin-left:12px;
}
input[name="deletar"]:hover{
    border-radius: 25px;
    outline: none;
    background-color:black;
    color:white;
}
.tabela{
    position: absolute;
    top:55%;
    left:18%;
    background-color: #38b2ff;
    width: 800px;
    text-align: center;
}

    #delet{
     width: 1000px;
     position: absolute;
     margin-top: 450px;
     background-color: white;
     left: 18%;
	 border-radius:10px;
   height:500px;
 overflow-y:auto;
    }
	#sair{
	width:80px;
	margin-top: 5px;
	margin-right: 5px;
    border-radius: 25px;
    outline: none;
    background-color:white;
    color:black;
    cursor: pointer;
    float:right;
	padding-top:10px;
	padding-bottom:10px;
	}
	#sair:hover{
	border-radius: 25px;
    outline: none;
    background-color:black;
    color:white;
	}
	
	#voltar{
	margin-top: 5px;
	margin-right: 20px;
    border-radius: 25px;
    outline: none;
    background-color: white;
    color:black;
    cursor: pointer;
    float:right;
	padding-left:10px;
	padding-right:10px;
	padding-top:10px;
	padding-bottom:10px;
	}
	#voltar:hover{
	border-radius: 25px;
    outline: none;
    background-color:black;
    color:white;
	}
#submitalterftot{
  position:absolute;
  top:400px;
  left:140px;
}
#edicaocom{
  top:650px;
  left:400px;
  position:absolute;
  width:450px;
  height:450px;
  background-color:black;
  box-shadow:1px 2px 3px green;
  opacity:0.9;
  display:none;
}
#edicaocomtit{
  top:10px;
  position:absolute;
  width:100%;
  background-color:white;
  height:40px;
}
#subtedicao{
  position:absolute;
  left:65px;
  font-family:'impact';
}
#textaocomedite{
  position:absolute;
  top:200px;
  resize:none;
  padding-left:4px;
}
.subedit{
  top:400px;
  position:absolute;
  width:200px;
  height:30px;
  background-color:white;
  color:black;
  font-family:'impact';
  font-size:20px;
}
.subedit:hover{
  background-color:#7399d6;
}
#edit2:hover{
   background-color:#7399d6;
   cursor:pointer; 
}
#edit1:hover{
   background-color:#7399d6;
}
#edit1{
  top:390px;
  position:absolute;
  width:200px;
  height:30px;
  background-color:white;
  color:black;
  font-family:'impact';
  font-size:20px;
  border-radius:0px;
  left:10px;
}
#edit2{
  left:240px;
}
#xbranco{
  position:absolute;
  width:50px;
  height:50px;
  z-index:20;
  top:1px;
  float:right;
  right:2px;
}
#xbranco:hover{
  background-color:white;
}
tr:hover{
  background-color:#4d5e7a;
  cursor:pointer;
}
th{
  background-color:#7c9ed3;
  height:30px;
}

</style>
<script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js.js"></script>
     <script>
     $(document).ready(function(){

    $(document).on('submit','#ditcom',function(event){
        event.preventDefault();
        var dados=$(this).serialize();
        res=confirm("Deseja mesmo realizar esta ação?");
          if (res) {
                    
          
        $.ajax({
            url: 'alteracomentario.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#resultado').html(data);
            }
        });
      }
    
    });
});
     //kkxkzxkzkxkzkxkzkx
      $(document).ready(function(){
    $('#resultado').on('click','a',function(event){
  event.preventDefault();
  var urlget=this.href;
  var envio2 = $(this).serialize();
  

  $.ajax({

    url:urlget,
    dataType: 'html',
    data: envio2,
    type: 'GET',
    success: function(data){

      $('#edicaocom').html(data);
    }
  });

  return false;

});
    });
    </script>

</head>
<body>



    <?php
    Error_reporting (0);
    session_start();
    if (!isset($_SESSION['sexo'])) {
    echo "<script>alert('você precisa esta logado!');</script>";
echo "<script>window.location.href='noticianews.php';</script>";
}
    ?>

    <!-- ======================================================= AQUI COMEÇA O MENU DO SITE ========================================================= -->
<header id="menu_em_cima">
  <img src="fotobola.jpg" id="fotobolalogo"/>
   <h1 id="bug">www.FutebolBugadown.com</h1>
    <?php
    $oid=$_SESSION['id'];
    include 'connection.php';
    $sql="select * from usuariocomum where idusuario='$oid'";
    $res=mysqli_query($con,$sql);
  while($vreg= mysqli_fetch_row($res)){
$fotosuperusu=$vreg[5];
$nomesuperusu=$vreg[1];
  }
    if (isset($_SESSION['nome'])) {

$nomevarn=explode(" ",$nomesuperusu);
//$ftdusu=$_SESSION['fotousu'];
if ($fotosuperusu) {
  echo "<style> #fotousu{background-image:url('fotousucomum/$fotosuperusu');}</style>";
}else{
  if ($_SESSION['sexo']=="masculino") {
      echo "<style> #fotousu{background-image:url('img/usuario.png');background-color:white;}</style>";
  }else{ echo "<style> #fotousu{background-image:url('img/usufeminino.png');background-color:white;}</style>";                           }
}
    echo "
  <div id='fotousu' onclick='ak()'>
  <h1 id='nomeusu'>$nomevarn[0],</h1>
  <ul id='menulog'  onMouseOver='ak()' onMouseOut ='saimenuusuario()'>
<li><a href='usuarioPerfil.php'>Alterar suas informações</a></li>
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
        <!--
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
        </nav>-->
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
<!--===============aqui termina o menu=========================-->

<div id="foto-da-noticia">
<button id="voltar"><a href='noticianews.php'>Voltar a Página inicial</a></button>
	<h1 class="title">Alterar meu perfil</h1>
<?php
//$foto=$_SESSION['fotousu'];
//if (!$foto!="") {
echo "  <form action='usuarioPerfil.php' name='alterafoto' method='POST' id='alterafoto' enctype='multipart/form-data'>
<input type='file' name='foto-da-noticia' id='fo' >
<input type='submit' value='Enviar foto de perfil' id='submitalterftot' name='enviaf'>
</form>
<label id='label' for='fo'><h1 id='tii'>Click para Adicionar uma foto no perfil</h1></label> ";
//}
?>

<?php
$idusu=$_SESSION['id'];
include 'connection.php';      
$sql= "select*from usuariocomum where idusuario='$idusu';";
$res=mysqli_query($con,$sql);
while($vreg= mysqli_fetch_row($res)){   

?>
           
<form name="form5" method="POST" action="">
    <table id="form2">
        <CAPTION><center id="dadosAtuais">Meus dados pessoais</center></CAPTION>
    <tr align="center">
    <td> Nome: </td><td><b><?php echo $vreg[1]."<br>"; ?></b></td>
    </tr>
    <tr align="center">
    <td> Senha: </td><td><b><?php echo $vreg[2]."<br>"; ?></b></td>
    </tr>
    <tr align="center">
    <td> Email: </td><td><b><?php echo $vreg[3]."<br>"; ?></b></td>
    </tr>
    <tr align="center">
    <td> Sexo: </td><td><b><?php echo $vreg[4]."<br>"; ?></b></td>
    </tr>
    </table>
</form>
<?php
}
mysqli_close($con);
?>

<form name="form4" method="POST" action="usuarioPerfil.php" id="form4">
<?

//$sql1="select*from usuariocomum where idusuario=$_GET[idusuario]";

?>
    <table id="form">
        <CAPTION><center id="dadosAtuais">Alterar Dados</center><input type="submit" name="enviarUsu" value="enviar"></CAPTION>
    <tr>
    <td>
        <b>Novo Nome:</b>
        <input type="text" name="nome" id="nome" placeholder="Você pode deixar em branco.."/>
    </td>
    </tr>
    <tr>
    <td>
        <b>Nova Senha:</b>
        <input type="password" name="senha" id="senha" placeholder="Você pode deixar em branco.."/>
    </td>
    </tr>
    <tr>
    <td>
        <b>Novo Email:</b>
        <input type="Email" name="email" id="email" placeholder="Você pode deixar em branco.."/>
    </td>
    </tr>
    </table>
</form>
<!--php de alteracao de dados do usuario-->
<?php
if (isset($_POST['enviarUsu'])) {
  $idusualtera=$_SESSION['id'];
  $newnome=$_POST['nome'];
  $newsenha=$_POST['senha'];
  $newemail=$_POST['email'];
if ($newmnome!=="") {
include 'connection.php';
$sql="UPDATE `portal`.`usuariocomum` SET `nome_usuario` = '$newnome' WHERE `usuariocomum`.`idusuario` =  $idusualtera;";
$res=mysqli_query($con,$sql);
$ca=mysqli_affected_rows($con);
        if ($ca>0) {
      echo "<script>alert('Nome  alterado com sucesso !');</script>";
        }
        mysqli_close($con);
}
if ($newsenha!=="") {
include 'connection.php';
$sql="UPDATE `portal`.`usuariocomum` SET `senha_usuario` = '$newsenha' WHERE `usuariocomum`.`idusuario` =  $idusualtera;";
$res=mysqli_query($con,$sql);
$ca=mysqli_affected_rows($con);
        if ($ca>0) {
      echo "<script>alert('Senha alterada com sucesso!');</script>";
        }
        mysqli_close($con);
}
if ($newemail!=="") {
include 'connection.php';
$sql="UPDATE `portal`.`usuariocomum` SET `email_usuario` = ' $newemail' WHERE `usuariocomum`.`idusuario` =  $idusualtera;";
$res=mysqli_query($con,$sql);
$ca=mysqli_affected_rows($con);
        if ($ca>0) {
      echo "<script>alert('Email  alterado com sucesso!');</script>";
        }
        mysqli_close($con);
}
 echo "<script>window.location.href='usuarioPerfil.php';</script>";

}//fim do primeiro if
?>
<!-- fim dophp de alteracao de dados do usuario-->

<!--- Tabela comentario-->
<div id="resultado">
<form name="form1" action="del.php" method="POST" id="form1">
<table id="delet">
    <CAPTION><center id="dadosAtuais">Meus Comentários</center><input type='submit' value='deletar' name='deletar'><input type='reset' value='desmarcar' name="reset"></CAPTION>
<thead>

<div id="resultado1">
<th align="center">Edicao</td>
<th align="center">Marcado</td>
<th align="center">Comentário</td>
<th align="center">Nome</td>
<th align="center">Data</td>     
<th align="center">título da Noticia</td>
<th align="center">Situação</td>     
</thead>
<tbody>


<?php
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

?>
</tbody>
</table>
</form>
<!---Fim da Tabela comentario-->
</div><!--div agora-->
</div>
</div>
<!--div para edicao-->
<div id='edicaocom'>
<img src='img/xbranco.png' onclick='fechaedit()' id='xbranco'/>
<div id='edicaocomtit'>
<h1 id='subtedicao'>Edição de comentários</h1>
<form action='alteracomentario.php' method='POST' id='ditcom'>
<textarea cols='55' rows='10' id='textaocomedite' name='textaocomedite'>
</textarea>
<input type='submit' value='Enviar' class='subedit'id='edit1' >
<input type='reset' value='Apagar' class='subedit' id='edit2'>
</form>

</div>
<script>
function fechaedit(){
  a=document.getElementById("edicaocom");
  a.style.display="none";
}
function abreedit(){
    a=document.getElementById("edicaocom");
  a.style.display="block";
}
</script>
<!--div para edicao-->
<?php
if (isset($_POST['enviaf'])):
  
    $idabencoado=$_SESSION['id'];
//criando um array com os formatos permitidos
  $formatosPermitidos = array("png","jpeg","jpg","JPG",'JPEG','PNG');

   //var_dump($_FILES);
  
$extensao =pathinfo($_FILES['foto-da-noticia']['name'],PATHINFO_EXTENSION);//funcao para peggar a extensao
//  echo" $extensao";

  //agora verificando se aquela extensao existe no noosso arrya
  if(in_array($extensao,$formatosPermitidos)):
  //echo "existe";
        include 'connection.php';
    $sql1="select * from usuariocomum where idusuario='$idabencoado'";
    $res1=mysqli_query($con,$sql1);
  while($vrega= mysqli_fetch_row($res1)){
    $fotodouser=$vrega[5];
  }
    $pasta ="fotousucomum/";   //para onde vai
      $temporario=$_FILES['foto-da-noticia']['tmp_name'];
      $novoNome= uniqid().".$extensao";
      if(move_uploaded_file($temporario,$pasta.$novoNome)):
       include 'connection.php';
     $sql ="UPDATE `portal`.`usuariocomum` SET `fotousu` = '$novoNome' WHERE `usuariocomum`.`idusuario` = '$idabencoado';";
     $res=mysqli_query($con,$sql);
     echo "<script>alert('foto de perfil alterada com sucesso!');</script>";
     $pasta="fotousucomum/";
     unlink($pasta.$fotodouser);
      else:
        $mensagem= "erro,nao foi possivel fazer o upload";
      endif;
     else:
      //echo "nao existe";
             echo "<script>alert('insira uma imagem nos padroes desejados')</script>";
     endif;
      echo "<script>window.location.href='usuarioPerfil.php';</script>";
  endif;


?>
<!--script de upload para precarregamento-->
<script type="text/javascript">

function aparece(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }


// ====================================================================================== //
$("#fo").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#label");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});
// AQUI TERMINA O JQUERY PARA UPLOAD DA IMAGEM //
//comeca o menu js/////
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
 function paraanima(){
  a=document.getElementById("mais2");
  a.style.animationIterationCount="paused";
 }
 
</script>
</body>
</html>