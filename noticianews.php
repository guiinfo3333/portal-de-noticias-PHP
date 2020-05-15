

<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>

.pesquisa{
top:130px;
  }
.menu-icon,#leg{top:130px; }
#leg{
  top:140px; 
}

#nomeusu{
  position:absolute;
  color:red;
  left:-130px;
  top:10px;
}
#decora2{
  top:1500px;
}
#h1log{

top:100px;
font-family:arial;
font-size:50px;
color:white;
text-shadow:1px 2px 10px #53f442;
}
#fotobolalogo{
border-radius:50%;
top:50px;
position:absolute;
width:300px;
height:120px;
left:208px;
/*
  animation-name:anime2;
  animation-duration:2s;
  animation-timing-function:linear;
  animation-delay:1s;
*/
}
#futlogo{
  position:absolute;
  left:70px;
  
}
#logosite{
  width:800px;
  top:0px;


  position:absolute;
  left:380px;
border:1px dotted green;
border-bottom: none;

  height:150px;
  z-index:10;
  padding-top:3px;
  border-top:none;
  z-index:30;
}
#buglogo{
  position:absolute;
  top:0px;

  float:right;
   right:80px;
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
#completa{
  position:absolute;
  width:100%;
  background-color:black;
  height:130px;
}
#box2{
box-shadow: 1px 1px 30px green;
margin: 40px;
padding: 40px;
width: 400px;

margin-top:500px;
float:right;
background-color: white;
}

.zoom {
  overflow: hidden;
  width:500px;
  position: relative;

}
.zoom1 {

  overflow: hidden;
  width:500px;
  position: relative;
  left:0px;

}
.zoom .img-responsive {
  width:500px;
  height:400px;
   max-width: 100%;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.zoom1 .img-responsive1 {
    width:200px;
  height:200px;
   max-width: 100%;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.zoom1:hover .img-responsive1 {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
#logo{
position:absolute;
left:300px;
top:0px;
right:450px;
width:957px;
height:85px;
}
#divpesquisa{
top:250px;
width: 900px;
height:350px;
position: relative;
left:22%;
border:1px solid black;
box-shadow:1px 2px 6px green;
  overflow-y:auto;
  display:none;
}
#resultados{
  width:100%;
  height:30px;
  background-color:blue;
  box-shadow:1px 2px 3px blue;
  text-align:center;
  font-family:arial;
  font-size:30px;
  color:white;


}
.caption{
font-size: 30px;
color:#1b58ba;
font-weight:bold;
font-family:arial;
cursor: pointer;
position:absolute;
left:-25px;
}
.caption:hover{
  color:red;
}
#fotousu{
  top:0px;
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

#linkpes{
  position:relative;
  top:20px;
  font-size:25px;
  font-family:Arial;
 transition: all 1s;
}
#linkpes:hover{
  color:yellow;
transform:rotate(10deg);
}
.secunle{
  left:0px;
  position:absolute;
}
#textonoti1 {
  position:relative;
  color:red;
  top:0px;
 
  font-family:arial;
  text-align: center;
  color:red;
  font-size:22px;
  text-decoration:none;
  float:right;
  right:35px;
}

.acesso #aces_ul{
right:17px;
position:absolute;
top:0px;
margin:0;
list-style:none;
background-color:#41f700;
border-radius:4px 2px 10px 3px;
cursor: pointer;
z-index:50;
}
#sessaologin{
  position:absolute;
  background-color:white;
z-index:50;
  float:right;
  right:20px;
 top:28px;
  font-family:Arial;
display:none;
}
#sessaologin li {
   padding-top:7px;
  text-align:center;
  border: 2px solid black;
  padding-bottom:10px;
  height:15px;
  width:130px;
  font-size:20px;
}



</style>


<title>HomePage</title>

<head>
<body>

<div id="completa">
</div>
  <?php
 

 session_start();

  
  ?>
  
  <header id="menu_em_cima">
    <?php
    if (isset($_SESSION['nome'])) {

$nomevarn=explode(" ",$_SESSION['nome']);
$ftdusu=$_SESSION['fotousu'];
$sexousu=$_SESSION['sexo'];
if ($ftdusu) {
  echo "<style> #fotousu{background-image:url('fotousucomum/$ftdusu');}</style>";
}else{   //este else é para o caso de nao ter foto o usuario para colocar a padrao
if ($sexousu=="masculino") {
    echo "<style> #fotousu{background-image:url('img/usuario.png');background-color:white;}</style>";

}else{
    echo "<style> #fotousu{background-image:url('img/usufeminino.png');background-color:white;}</style>";
}
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
<form class="pesquisa" action="" method="POST">
<input type="search" id="texto" placeholder="BUSCAR" name="buscar">
<img src="img/lupa.png" class="btn" >
</form>

        <input type="checkbox" id="chk">
        <label for="chk" class= "menu-icon" onMouseOver="mouseicone()" onMouseOut="sairmouseincone()" >&#9776;</label>
        <div class ="bg"></div>
    <h1 id="leg">MENU</h1>
     <!-- <img src= "img/logo.png " id="logo"/>-->
     <div id="logosite">

   <center> <h1 id="h1log"> <p id="futlogo">Futebol</p>

<p id="buglogo">Bugadown</p></h1></center></h1>

<img src="fotobola.jpg" id="fotobolalogo"/>
</div>
  <!--acesso criado -->
  <!--tela para entrar e se cadastrar-->
 
 

        <nav class="menu" id="principal" onMouseOver="passarmouseprincipal()" onMouseOut="tirarpassarmouseprincipal()">
            <ul id="ul_menu">
                <li id=""><a href="" class="voltar">Voltar</a></li>
                <li id="home" onMouseOver="saisecun()"><a href="">Home</a></li>
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
		<!--div para adentrar na administracao ou estar logado-->
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
     <li ><a href='login.php ''>Usuário</a></li>
      <li><a href='loginadm.php'>Administrador</a></li>
    </ul>
  </div>
      ";
     }
    ?>
    <!--div para adentrar na administracao ou estar logado-->

<!--espaço para o slide-->
<div id='divpesquisa'>

<?php
include('connection.php');
 $campo="'%".$_POST['buscar']."%'";
  $res=mysqli_query($con,"select * from noticia where titulo like $campo");
   $oi= mysqli_affected_rows($con);
   echo "<div id='resultados'>$oi Resultados</div>";
   while($vreg= mysqli_fetch_row($res)){
echo utf8_encode( "<center><a href='secundarianoti.php?id=$vreg[0]' id='linkpes'>$vreg[6]</a><center><br>");
   }
?>

</div>
<?php
 if (isset($_POST['buscar'])) {
  include 'connection.php';
  $search=$_POST['buscar'];
  echo "<style>.slideshow-container{display:none;}</style>"; 
  echo "<style>#divpesquisa{display:block;}</style>"; 
  $sql="select * from noticia where titulo ='$search'";
     
  
 }
  ?>
<div class="slideshow-container">

<?php
             include 'connection.php';
              $res= mysqli_query($con,"SELECT * FROM noticia ORDER BY idnoticia DESC limit 4");
              $oi= mysqli_affected_rows($con);
              $i=1;
              while($vreg= mysqli_fetch_row($res)){

                $id=$vreg[0];
                $foto=$vreg[5];
                $tit=$vreg[6];
                switch($i){
                  case 1:
               echo utf8_encode("


<div class='myslides fade'>

<div class='numbers'>1 / 4</div>

<div id='img1' class='img' ></div>

<div class='caption'><a href='secundarianoti.php?id=$id'>$tit</a></div>

</div>
<style>   #img1{background-image: url('fotonoticia/$foto');     }</style>
               ");
               break;
             
                case 2:
               echo utf8_encode("


<div class='myslides fade'>

<div class='numbers'>2 / 4</div>

<div id='img2' class='img' ></div>

<div class='caption'><a href='secundarianoti.php?id=$id'>$tit</a></div>

</div>
<style>   #img2{background-image: url('fotonoticia/$foto');     }</style>
               ");
               break;
           
              case 3:
               echo utf8_encode("


<div class='myslides fade'>

<div class='numbers'>3 / 4</div>

<div id='img3' class='img' ></div>

<div class='caption'><a href='secundarianoti.php?id=$id'>$tit</a></div>

</div>
<style>   #img3{background-image: url('fotonoticia/$foto');     }</style>
               ");
               break;
                 case 4:
               echo utf8_encode("


<div class='myslides fade'>

<div class='numbers'>4 / 4</div>

<div id='img4' class='img' ></div>

<div class='caption'><a href='secundarianoti.php?id=$id'>$tit</a></div>

</div>
<style>   #img4{background-image: url('fotonoticia/$foto');     }</style>
               ");
               break;
             }$i++;}
              ?>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>

<a class="next" onclick="plusSlides(1)">&#10095;</a>
<div >

<span class="dots" onclick="currentSlide(1)"></span> 

<span class="dots" onclick="currentSlide(2)"></span> 

<span class="dots" onclick="currentSlide(3)"></span> 

<span class="dots" onclick="currentSlide(4)"></span> 

</div>


</div>
<br>

<!--espaço para o slide-->
<div id="box"><center><h1>Notícias secundárias</h1></center><br><br>
<?php
             include 'connection.php';
              $res= mysqli_query($con,"SELECT * FROM noticia ORDER BY idnoticia DESC limit 10");
              $oi= mysqli_affected_rows($con);
              while($vreg= mysqli_fetch_row($res)){

                $id=$vreg[0];
                $foto=$vreg[5];
                $tit=$vreg[6];
                echo utf8_encode("
<div class='zommmaior'>
<div class='zoom'>
  <img src='fotonoticia/$foto' class='img-responsive'>
  <div class='text-item1'  id='text-item'>       
  </div>
</div>
  <legend id='textonoti'><a href='secundarianoti.php?id=$id' class='linknoti'>$tit</a></legend>
</div>
<br>
<br>
<hr>
<br>



              ");
        
                }
?>
                 

<div id="vejamais"><h1 id="tvejamais">Veja Mais</h1></div>
</div>

<div id="box2"><center><h1>Notícias +Visualizadas</h1></center>
<?php
             include 'connection.php';
              $res= mysqli_query($con,"SELECT * FROM noticia ORDER BY viewsnoticia DESC limit 3");
              $oi= mysqli_affected_rows($con);
              while($vreg= mysqli_fetch_row($res)){

                $id=$vreg[0];
                $foto=$vreg[5];
                $tit=$vreg[6];
                echo utf8_encode("
<div class='zommmaior1'>
<div class='zoom1'>
  <img src='fotonoticia/$foto' class='img-responsive1'>
  <div class='text-item1'  id='text-item'>       
  </div>
</div>
  <legend id='textonoti1' ><a href='secundarianoti.php?id=$id' class='linknoti'>$tit</a></legend>
</div>
<br>
<br>
<hr>
<br>



              ");
        
                }
               
?>
</div>
<div id="box3"><center><h1>"Rodapé"</h1></center>
<!--menu de rede social-->
		 <section id="social">
  <div class="rede" id="facebook">
  <img class="imgrede" src="img/facebook.png" />
  </div>
  <div class="rede" id="twitter">
  <img class="imgrede" src="img/twitter.png" />
  </div>
  <div class="rede" id="instagram">
  <img class="imgrede" src="img/instagram.png " />
  </div>
  <div class="rede" id="snap">
  <img class="imgrede" src="img/snap.png" />
  </div>
  <div class="rede" id="plus">
  <img class="imgrede" src="img/plus.png " />
  </div>
   <div class="rede" id="youtube">
   <img class="imgrede" src="img/youtube.png " />
   </div>
  </section>
  <!--menu de rede social-->

</div>
<script type="text/javascript" src="js/script.js"></script>
<script src="jquery/jquery-3.3.1.min.js"></script>

<script >
jQuery(function () {
 jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 100) {
   $("#menu_em_cima").css('top', '0');
     $("#menu_em_cima").css('height', '70px');
        $( ".menu-icon" ).css('top', '10px');
         $( "#leg" ).css('top', '18px');
             $( ".pesquisa" ).css('top', '18px');
             $( ".pesquisa" ).css('left', '83%');
               $( ".menu" ).css('top', '70px');
                 $( "#logo" ).css('display', 'none');
                  $( "#logosite" ).css('display', 'none');
                   $( "#fotousu" ).css('right', '3px');
                     $( "#fotousu" ).css('top', '5px');
                      $( "#nomeusu" ).css('display', 'none');


  } else {
   $("#menu_em_cima").css('top', '30px');
    $("#menu_em_cima").css('height', '150px');
      $( ".menu-icon" ).css('top', '100px');
         $( "#leg" ).css('top', '110px');
             $( ".pesquisa" ).css('top', '100px');
               $( ".pesquisa" ).css('left', '85%');
               $( ".menu" ).css('top', '180px');
                $( "#logo" ).css('display', 'block');
                      $( "#logosite" ).css('display', 'block');
                         $( "#fotousu" ).css('right', '15px');
                         $( "#fotousu" ).css('top', '0px');
                            $( "#nomeusu" ).css('display', 'block');
                                  $( "#logosite" ).css('top', '-30px');
                                 


  }
 });
});

</script>
<script>

function ak(){
a=document.getElementById("menulog");
a.style.display="block";
}
function saimenuusuario(){
a=document.getElementById("menulog");
a.style.display="none";
}



</script>

</body>
</html>