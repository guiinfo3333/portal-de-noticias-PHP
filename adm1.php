
<html>
<head>
  <?php header('Content-Type: text/html; charset=utf-8'); ?>
 <meta charset="UTF-8">
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />

<script src="js/semrefresh.js"></script>
<script src="jquery/jquery-3.3.1.min.js"></script>

<!---------------para o editor de texto funcionar-->
<!---Porque nao estava pegando <link rel="stylesheet" href="cssadm.css" type="text/css"/>-->
<style>

td{
  text-align:center;
}
#menu_em_cima{   /*o header*/
    width:100%;
    height:90px;       /*so o header*/
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
  top:23px;    
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
    top:80px; 
    overflow:hidden; /*tira os pontos da lista*/
    transition:all 1s;
    width:200px;
    left:-300px;  
    z-index: 12;
}
#leg{
left:60px;
top:40px;
position:absolute;
font-size:25px;
font-family:'Arial';
 color: white;
  
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
/*css da pesquisa*/

.pesquisa{

position:relative;
width:600px;                  /*cacterísticas da pesquisa*/
height:50px;
top:80px;
left:250px;


}
.texto{

width:500px;       /*carac do input*/
height:40px;
float:left;
color:black;
font-family: 'Arial ';
font-size:20px;
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

border : solid 2px blue;


}


/*css da pesquisa*/

/*css adm da tabela*/
.tabelaEditavel {
  top:200px;
  position: relative;
  border:solid 1px;
  width:80%;
  left:100px;
}
 
.tabelaEditavel td {
    border:solid 1px green;
    font-family: impact;
    color:green;
}
.tabelaEditavel th{
     color:blue;
}
 
.tabelaEditavel .celulaEmEdicao {
    padding: 0;
}
 
.tabelaEditavel .celulaEmEdicao input[type=text]{
    width:100%;
    border:0;
    background-color:rgb(255,253,210);  
}

/*css adm*/
    #alterafiel,#alterarnovoadm{
        display:none;
    }
    
    *{
margin:0;
padding:0;

}
#adm-maior{
top:100px;
left:100px;
position:absolute;
width:1266px;
height:1000px;
border:1px solid black;
box-shadow: 1px 1px 30px green;


}
#menu-adm{
position:relative;
height:1000px;
border:1px solid black;
width:200px;


}

#area-preencher{
position:absolute;
width:1065px;
border:1px solid black;
border-top:0px;
left:200px;
height:1000px;
top:0px;
 
 background-repeat: no-repeat;
 background-size:600px 600px;
background-position:center center;

 overflow:auto;
 overflow-x: hidden; 

}
#tii{
top:35%;
left:12%;
position:absolute;
text-shadow: 2px 2px #ff0000;
color:#d7dae0;
}



#a{

height:1000px;   
background-color:white;

}
#a li{

display:block;
top:0px;
color:green;
padding-left:10px;
padding-top:60px;
padding-bottom:76px;
font-family:'impact';
border-bottom:1px solid blue;

}
#titulo{
position:absolute;
background-color:#818691;
width:84%;
left:202px;
height:192px;

}

ul li:hover{

  background-color:#f47d42;
  color:black;
}
#publicarnoticias{
overflow-x: hidden;
position:absolute;
width:1065px;
top:0px;
border:none;
border-radius:12px;
display:block;
left:0px;

}
.teste{
    position: absolute;
    top:0px;
    width:1065px;
    display:none;
}

#teste2{
    position: absolute;
    top:0px;
    display:none;
    width:1065px;

}
#teste3{
   position: absolute;
   top:0px;
     width:1065px;
    display:none;
    border:none;

 
}

#adm{
top:0px;
right:0px;
position: absolute;
width:200px;
height:200px;
}
#alterafiel1{
    float:right;
    position:absolute;
    right:100px;
}
#foto-adm{
width:80px;
height:80px;
border:1px solid black;

}
#infadm{
top:80px;
position:relative;
color:red;
font-size:13px;
}

#foto-da-noticia{
left:40px;
position: relative;
width:90%;
height:500px;
border:1px solid black;
background-image:url("");
}
#fo{
display:none;
}
input[type="text"] {
    width: 1000px;
    height:30px;
    border-radius:50px;
    padding-left:10px;


}

#corpo-noti{
  resize: none;
  outline:none;
    overflow:auto;
    padding-left:12px;
   
}
label{
  color:green;
  text-shadow:green;
  font-family:Arial;
  font-size:30px;
}
h3{
  position: relative;
}
fieldset{
  border-radius: 12px;
  width:1000px;
}
#tesp{
position:relative;
color:green;
font-size:19px;
font-family:Arial;
font-size:30px;
}
#cnoticia{
  position:relative;
color:green;
font-size:19px;
font-family:Arial;
font-size:30px;
}
#corpo-noti{
position:relative;
left:10px;
border-radius:13px;
border:1px solid black;
}
#sub{
left:20%;
border-radius:15px;
width:300px;
height:50px;
font-family:'arial';
text-transform:uppercase;
background-color:green;
}
#re{
left:20%;
text-transform:uppercase;
font-family:'arial';
border-radius:15px;
width:300px;
height:50px;
background-color:green;
}
#sub:hover,#re:hover{
background-color:red;
transform: translateY(-1px);
box-shadow:1px 2px 4px green;
}
.debaixo{
position:relative;
left:5%;
}
.pos{
position: relative;
left:30px;
}
#legadm{
position: absolute;
left:300px;
}
.thumb-image{
width:100%;
height:500px;
}

.num-com-visu{   
    position: relative;

    background-color:black;
    top:400px;


}
.num-com-visu h1{
    position: relative;
    font-size:40px;
    color:red;
    top:10px;
    left:10px;
}
#num-com-visu1,#num-com-visu2{
width:80px;
height:80px;
}
#num-com-visu3{
    width:150px;
    height:80px;
}
#num-com-visu3 legend{
left:180px;
}
#num-com-visu3 h1{
top:14px;
left:8px;
color:blue;
}

.num-com-visu legend{
    position: absolute;
    font-family:Noto Sans, sans-serif;
    font-size: 20px;
    float: left;
    left:100px;
    top:0px;
}
tr:hover{
    background-color:yellow;
    cursor:pointer;
}
tr:active{
    background-color:pink;
}
.val{
position:relative;
background-color:black;
width:100px;
height:50px;
border:1px solid black;
border-radius:3px;
top:300px;
font-family:arial;
font-size:20px;
color:#ed530b;
text-align: center;
}
.val:hover{
background-color:#c5f442;
box-shadow: 1px 1px 30px green;
cursor:pointer;


}
.validar{
    position:relative;
    top:12px;
}
#validar{
  top:249px;
    left:490px;
 width:125px;
}
#naovalidar{
    left:650px;
    top:250px;
}
#visusu1{
  top:300px;
    left:350px; 
}
#visusu{
   top:250px;
    left:350px;  
}

#banirusu{
    top:300px;
    left:550px; 
}
#banirusudel{
    top:250px;
    left:550px; 
}
#visu{
     left:250px;
     top:197px;
}
.infomaiorcoment{
    top:400px;
    position:absolute;
    width:500px;
    height:500px;
    background:black;
    border-radius:4px;
    left:310px;
    display:none;
    border:1px solid green;

}
.infomaiorcoment h1{
    position:relative;
    top:40px;
    font-family:Arial;
    color:red;
    font-size:18px;
    padding-bottom:18px;
    margin-left:6px;
}
#coment{
    resize: none;
    outline:none;
    position:absolute;
    top:340px;
    left:2px;
}
#comentlegen{
    position:absolute;
    top:305px;
    font-family:Arial;
    color:yellow;
    font-size:18px;
    margin-left:6px;
    
}
#infocom{
display:none;
}
  

#infocom:checked ~ #infomaiorcoment{
display:none;

}
.lista:hover{
cursor:pointer;
}
#fechimg{position: absolute;right:0px;width:40px;height:40px; }
#fechimg:hover{background-color:blue}
#iconbas{
position:absolute;
top:8px;
}
#iconnat{
    position:absolute;
    left:500px;
}
#licon{
    position:absolute;
    top:1px;
   right:8px;
   height:180px;

 }
 #futicon{
      position:absolute;
      top:800px;
     width:400px;
     right:4px;
     -webkit-filter:contrast(200%);
     filter:contrast(200%);
   
 }
 #foto-usu{
position:relative;
left:110px;
height:200px;
width:300px;
 }
  #foto-usu img{
    height:200px;
width:300px;
  }
  .alterar{
    top:400px;
    position:relative;

  }
  #alterarnovoadm{
    float:right;
  }
   .alterar h1{
    font-family:arial;
    font-weight:bold;
    font-size:30px;
    color:red;
    padding-bottom:16px;
   }
    .alterar input.cu1{ 
        position:relative;
        padding-bottom:13px;
        left:0;
        background-color: white;
        border-radius: 25px;
        outline: none;
        padding-bottom: 5px;
        padding-top: 5px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: -10px;
        color:blue;
    }
    .alterafiel{
        width:40%;
        border:3px solid black;
        padding-top:30px;

    }
    .alterafiel legend{
    font-family:arial;
    color:black;
    font-size:30px;
    left:1px;

}
#enviaralterar{
position:relative;
width:100px;
height:50px;
background-color:red;
margin-top:20px;
margin-bottom:60px;
float:right;
margin-right:10px;
border-radius:10px;

}
#enviaralterar:hover{
    background-color:white;
    cursor:pointer;
    transform:translateX(12px);
     transform:translateY(12px);

}
#enviaralterar h1{
    position:absolute;
    color:black;
    top:5px;
    left:3px;
}
#ultimaspostagem{
    position:relative;
    float:right;
    width:500px;
    height:500px;
    right:100px;
    top:450px;
  
}
#ultimaspostagem a{
    font-family:arial;
    color:blue;
    font-weight:bold;
    text-decoration:none;
    padding-top:2px;
    font-size:18px;
}
#ultimaspostagem a:hover{
  color:green;
    font-size:19px;
}
#postafiel{
        width:500px;
        border:3px solid black;
        padding-top:30px;

}
#postafiel legend{
     font-family:arial;
    color:black;
    font-size:30px;


}
#novadm{

    position: absolute;
    top:0px;
    
    width:1065px;
      display:none;
    
}
#img-adm{
    position:absolute;
    width:250px;
    height:250px;
    box-shadow:2px 3px 3px 3px green;
    left:420px;
    top:10px;
    background-color:white;
}
#admimagevisualizar{
     width:250px;
    height:250px;
}
#informacoesdoadm{
    position:absolute;
    top:300px;

}
#informacoesdoadm h1{
    color:red;
}
#informacoesdoadm h1 span{
    color: black;
}
#alterainfoadm{
    position:absolute;
    top:1000px;
}
#alterafiel{
    position:absolute;
    top:250px;
}
#valalt{
position:relative;
left:800px;
color:red;
}
#valadm{
position:relative;
top:350px;
left:600px;
color:red;


}
#bug{
position:absolute;
left:600px;
z-index:30;
color:white;
font-family:arial;
font-size:25px;
top:10px;

}
#bugamd{
position:absolute;
color:white;
font-family:arial;
font-size:25px;
top:40px;
left:680px;

  
}
#bugamd:hover{
text-shadow:1px 2px 3px white;
cursor:pointer;

}
#imgadmadm{
    top:15px;
    border:3px solid red;
    width:50px;
    height:50px;
    float:right;
   position:relative;
    right:70px;
    background-image:url('img/a.jpg');
    background-size: cover;
    border-radius:13px;
}
#imgadmadm  #menulog{
display:none;
position:relative;
top:60px;
width:200px;
background-color:red;
right:100px;
z-index:60;
left:-150px;
text-align: center;
list-style:none;
}
#imgadmadm  #menulog li{
  border:1px solid black;
}
#imgadmadm #menulog li a:hover{
color:blue;
}
#imgadmadm  #menulog li a{
  padding-bottom:2px;
  text-decoration:none;
}

.showtable{
  position:relative;
    width:80%;
    height:300px;
   top:200px;
   
    left:100px;
    border:1px solid black;
    overflow:auto;
    overflow-x: hidden;
}
.tabelaEditavel {
  top:0px;
  position: relative;
border:none;
  width:100%;
  left:0px;
}
 
.tabelaEditavel td {
    border:solid 1px green;
    font-family: impact;
    color:green;
}
.tabelaEditavel th{
     color:blue;

}

 
.tabelaEditavel .celulaEmEdicao {
    padding: 0;
}
 
.tabelaEditavel .celulaEmEdicao input[type=text]{
    width:100%;
    border:0;
    background-color:rgb(255,253,210);  
}

.texto{

width:500px;       /*carac do input*/
height:40px;
float:left;
color:black;
font-family: 'Arial ';
font-size:20px;
background-color:rgb (0, 230, 230);
}
#noneadm{
  color:blue;
  float:right;
  right:150px;
  top:28px;
  position:absolute;
}
#infomaiorcomentcomen h1{
  position:absolute;
}

#titnoticom{top:40px;}
#titnoticom1{top:95px;}
#fotobolalogo{position:absolute;top:0px;width:250px;height:80px;left:380px;animation-name:anime2;animation-duration:2s;animation-timing-function:linear;animation-delay:1s;}
@keyframes anime2{0%{left:-600px; }50%{  left:600px;}100%{left:210px;}}
#edicaocom{
  top:650px;
  left:30px;
  position:absolute;
  width:450px;
  height:450px;
  background-color:black;
  box-shadow:1px 2px 3px green;
  opacity:0.9;
  display:none;
}
#edicaonoti{
  top:300px;
  left:300px;
  position:absolute;
  width:450px;
  height:450px;
  background-color:black;
  box-shadow:1px 2px 3px green;
  opacity:0.9;
  display:none;
}
#textaocomedite{
  position:absolute;
  top:200px;
  resize:none;
  padding-left:4px;
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
  left:30px;
  font-family:'impact';
}
#subtedicao1{
  position:absolute;
  left:90px;
  font-family:'impact';
}
#altercorpo{
  color:#1564db;
    position:absolute;
  left:6px;
  font-family:'impact';
  top:163px;
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
  top:400px;
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
#nomealter{
position:relative;
width:300px;
border:0px;
background-color:white;
top:100px;
left:10px;
}
#emailalter{
position:relative;
width:300px;
border:0px;
background-color:white;
top:130px;
left:20px;
}
#senhaalter{
position:relative;
width:300px;
border:0px;
background-color:white;
top:150px;
left:10px;

}
#later1{
position: relative;
top:100px;
color:white;
}
#later2{
position: relative;
top:130px;
color:white;
}
#later3{
position: relative;
top:153px;
color:white;
}
    </style>
  
<?php
require_once 'administrador.php';

?>
</head>

<body>
 
<?php
Error_reporting (0);
 session_start();
 if (!isset($_SESSION['nomeadm'])) {
 echo "<script>alert('Faca login para continuar');</script>";
 echo "<script>document.location='noticianews.php'</script>";
 }
  

?>
<header id="menu_em_cima">
  <img src="fotobola.jpg" id="fotobolalogo"/>
     
         <h1 id="bug">www.FutebolBugadown.com</h1>
         <h1 id="bugamd">administração</h1>
        <input type="checkbox" id="chk">
        <label for="chk" class= "menu-icon" onMouseOver="mouseicone()" onMouseOut="sairmouseincone()" >&#9776;</label>
        <div class ="bg"></div>
         <h1 id="leg">MENU</h1>
        <?php
        include 'connection.php';
        Error_reporting (0);
        $numeroadm=$_SESSION['idadm'];
        $sql= "select * from admin where idadm='$numeroadm'";
$res=mysqli_query($con,$sql);
while($vreg= mysqli_fetch_row($res)){
$nameadm= explode(" ",$vreg[1]);
}
        echo "
  <h1 id='noneadm'>Olá, $nameadm[0]</h1>
  ";
  ?>
         <div id="imgadmadm"  onclick="ak()">
          <?php session_start();
           $tempfotoadm=$_SESSION['fotoadm'];
              $sexoo=$_SESSION['sexo'];
           if ($tempfotoadm!="") {
           echo "<style> #imgadmadm{background-image:url('fotoadm/$tempfotoadm');}</style>"; 
           }else{
           if ($sexoo=="masculino") {   
             echo "<style> #imgadmadm{background-image:url('img/usuario.png');background-color:white;}</style>";  
           }else{
          echo "<style> #imgadmadm{background-image:url('img/usufeminino.png');background-color:white;}</style>";  
           }
           }
            ?>
         </h1>

 <ul id='menulog'  onMouseOver='ak()' onMouseOut ='saimenuusuario()'>
<li><a href='#'>Alterar suas informações</a></li>
<li><a href='acabarsessao.php'>Sair</a></li>
  <ul>

         </div>
         

       <!-- <img src= " " id="logo"/>
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
        <!--criando uma outra nav com as mesmas caracter�stica s� q ser� o=submenu-->
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
              <li><a href="">Jogo</a></li>   
            </ul>
        </nav>-->

 
        </header>

  <div id='a'></div>
<div id="adm-maior">
<!--<div id="titulo"><div id="foto-adm"><legend id="infadm">Informa��es do administrador</legend></div><h1 id="legadm">ADMINISTRA��O DO PORTAL</h1><img src="img/adm.png" id="adm"/></div>-->

<div id="area-preencher">
 
<!----------d--------------------------------primeira pag para publicar noticias-------------------------------->
<div id="publicarnoticias"><br>
    <form action="adm1.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="foto-da-noticia" id="fo" required=""> <label for="fo"><div id="foto-da-noticia"><h1 id="tii"> adicionar a foto da notícia</h1></div></label><br>
<label for="tit" class="pos">Título :</label><input type="text" name="titulonoti" maxlength="" size=" " placeholder="digite o titulo da notícia" id="tit" class="pos" required=""><br><br>
<label for="stit" class="pos">Subtítulo:</label><input type="text" name="subnoti" maxlength="" size=" " placeholder="digite o subtítulo da notícia" id="stit" class="pos" required=""><br><br>
<label for="autt" class="pos">Autor :</label><input type="text" name="autornoti" maxlength="" size=" " placeholder="digite o autor da notícia" id="autt" class="pos" required=""><br><br>
<fieldset class="pos">
<legend id="tesp">Informações da notícia</legend><br>
<!--Data de publicação :<input type="date" name="datanoti" value="futebol" required=""><br><br>-->
Fonte da Notícia :<input type="text" name="fontenoti" required=""><br><br>

</fieldset><br>
<legend id="cnoticia"><center>Corpo da notícia</center></legend>
<center><textarea  cols="130" rows="20" id="corpo-noti" name="corponot" required="">
</textarea></center>
<input type="submit" value="Publicar" id="sub" class="debaixo" name="publicar"/>
<input type="reset" value="apagar tudo" id="re"  class="debaixo"/>
</form>
    <?php
   
   $tit=isset($_POST['titulonoti'])?$_POST['titulonoti']:null;
   $subt=isset($_POST['subnoti'])?$_POST['subnoti']:null;
   $autonot=isset($_POST['autornoti'])?$_POST['autornoti']:null;
 //  $datanoti=isset($_POST['datanoti'])?$_POST['datanoti']:null;
   $dia=date("d");
   $mes=date("m");
   $ano=date("Y");
   $datanoti= $vartot=$ano.'-'.$mes.'-'.$dia;
   $fontenot=isset($_POST['fontenoti'])?$_POST['fontenoti']:null;
   $corponot=isset($_POST['corponot'])?$_POST['corponot']:null;
   
           
   ////////////////////oioi///////////////////////// 
  if (isset($_POST['publicar'])):
//criando um array com os formatos permitidos
	$formatosPermitidos = array("png","jpeg","jpg","JPG",'JPEG','PNG');

   //var_dump($_FILES);
  
$extensao =pathinfo($_FILES['foto-da-noticia']['name'],PATHINFO_EXTENSION);//funcao para peggar a extensao
//	echo" $extensao";

	//agora verificando se aquela extensao existe no noosso arrya
	if(in_array($extensao,$formatosPermitidos)):
	//echo "existe";
		$pasta ="fotonoticia/";   //para onde vai
	    $temporario=$_FILES['foto-da-noticia']['tmp_name'];
	    $novoNome= uniqid().".$extensao";
	    if(move_uploaded_file($temporario,$pasta.$novoNome)):
	    	$mensagem= "Uploaf feito com sucesso";
              $adm = new Administrador();
              $adm->publicarNoti($datanoti, $autonot, $fontenot, $novoNome,$tit,$subt,$corponot);
	   
	    else:
	    	$mensagem= "erro,nao foi possivel fazer o upload";
	    endif;
     else:
     	//echo "nao existe";
             echo "<script>alert('insira uma imagem nos padroes desejados')</script>";
     endif;
    
	endif;

   
   
   //////////////////oioioi////////////////////////////
 
    ?>
</div>
<!----------d--------------------------------primeira pag para publicar noticias-------------------------------->
<!----------d--------------------------------segunda pag para verficar comentarios-------------------------------->
<div  class="teste" id="teste">
<img src="img/basicon.png" id="iconbas">
<img src="img/natacaoicon.png" id="iconnat">
<img src="img/lutaicon.png" id="licon">

<form class="pesquisa" id="formcom">
<input type="search" class="texto" placeholder="BUSCAR" name="buscacom" id="buscacom">
<img src="img/lupa.png" class="btn" >
</form>
  <form action="validacom.php" method="POST" id="altervalcom">
  <div class="showtable" id="showtable">
      <?php
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
         
            <tr>';
            ?>
              <?php
              $sql="select c.idcomentario,u.nome_usuario,c.datacomentario,n.titulo,c.corpocomentario,c.validado from comentario as c join usuariocomum as u
on u.idusuario = c.idusuario
join noticia n
on n.idnoticia = c.idnoticia
order by c.idcomentario DESC;";
              include('connection.php');
            $res= mysqli_query($con,$sql);
              while($vreg= mysqli_fetch_row($res)){
                $dta=explode('-',$vreg[2]);
              ?>
              <td><center><a id='valcomlink' href='maioresinfocom.php?b=<?php echo $vreg[0]?>'>abrir</a></center></td> 
             <td><center><input type="checkbox" value="<?php echo $vreg[0]?>" name="valcom[]"></center></td>
                <td><center><?php echo utf8_encode($vreg[1]);?></center></td>
                <td><?php echo "$dta[2]/$dta[1]/$dta[0]";?></td>
                <td><?php echo utf8_encode( $vreg[3]);?></td>
                <td><?php 
                if ($vreg[5]) {
                echo "validado";
                }else{
                  echo "negado";
                }
               
                ?></td>
                
            </tr>
             
            <?php
}
            ?>

        </tbody>
    </table>

  </div>
    <input type="submit" id="validar" class="val" value="validar/negar">
    <input type="reset" id="naovalidar" class="val" value="desmarcar">
    <div id="visu" class="val"><legend class="validar" onclick=" abrevisucom()">Visualizar<legend></div>
</form>
    <!--area para visualizar os comentarios-->
        <div id="infomaiorcomentcomen" class="infomaiorcoment">

         <input type="checkbox" id="infocom"> <label for="infocom"><img src="img/fechar.png" id="fechimg" onclick="fechavisucom()"></label></input>
        <h1 id="titnoticom">Título da Notícia : Ceará ganha </h1>
        <h1 id="titnoticom1">Subtítulo da Notícia : mas não permanece na série A</h1>
      <legend id="comentlegen">Comentário do Usuário        :</legend>
      <textarea id="coment" cols="61" rows="10" disabled>
      </textarea>
      </div>
          <!--area para visualizar os comentarios-->
  
    <div class="num-com-visu" id="num-com-visu1">
      <?php
      include 'connection.php';
      $sql="select * from comentario where validado='1'";
      $res=mysqli_query($con,$sql);
      $cont=0;
        while($vreg= mysqli_fetch_row($res)){
          $cont=$cont+1;
        }
      echo "
       <h1>$cont</h1>";
       ?>
      <legend>Numero de comentários validados</legend>
    </div><br><br>
     <div class="num-com-visu" id="num-com-visu2">
       <?php
      include 'connection.php';
      $sql="select * from comentario where validado='0'";
      $res=mysqli_query($con,$sql);
      $cont=0;
        while($vreg= mysqli_fetch_row($res)){
          $cont=$cont+1;
        }
      echo "
       <h1>$cont</h1>";
       ?>
      <legend>Numero de comentários não validados</legend>
    </div><br><br>
         <!--<div class="num-com-visu" id="num-com-visu3">
      <!-- <h1>Futebol</h1>
      <legend>Categoria de notícia com mais comentário</legend>-->
   <!-- </div>-->

<!--segunda parte-->

</div>
<!----------d--------------------------------segunda pag para verficar comentarios-------------------------------->
<!----------d--------------------------------terceira pag para verficar usuarios-------------------------------->
<div id="teste2">
<img src="img/basicon.png" id="iconbas">
<img src="img/natacaoicon.png" id="iconnat">
<img src="img/lutaicon.png" id="licon">
<img src="img/futicon.png" id="futicon">
<form class="pesquisa" id="pesformusu">
<input type="search" class="texto" placeholder="BUSCAR" name="pesusuario" id="pesusuario">
<img src="img/lupa.png" class="btn" >
</form>
   <form action="deletarusu.php" method="POST" id="delusuform">
 <div class="showtable" id="showusu">
       <?php
    echo '
       <table class="tabelaEditavel">
        <thead>
            <tr>
                <th>Visualizar</th>
                <th>Marcado</th>
                <th>id usuario</th>
                <th>nome</th>
                <th>senha</th>
                <th>email</th>
                <th>sexo</th>
            </tr>
        </thead>
        <tbody>
         
            <tr>';
            ?>
              <?php
             
              if (isset($_GET['a']) && $_GET['a']!="null") {
                
                    echo "<style>#teste2{display:block;}</style>";
                     echo "<style>#publicarnoticias{display:none;}</style>";
                      echo "<style>#teste{display:none;}</style>";
                       echo "<style>#novadm{display:none;}</style>";
                         echo "<style>#teste3{display:none;}</style>";
                           echo "<style>#infomaiorcomentusu{display:block;}</style>";
     
              }
              include('connection.php');
            $res= mysqli_query($con,"select * from usuariocomum");
              while($vreg= mysqli_fetch_row($res)){
              ?>
             
                  <td><center><a id='verusulink' href='maioresinfouso.php?a=<?php echo $vreg[0]?>'>abrir</a></center></td>
             <td><center><input type="checkbox" value='<?php echo $vreg[0]?>' name="usu[]" id="usu[]"></center></td>
                <td><center><?php echo $vreg[0]?></center></td>
                <td><?php echo $vreg[1]?></td>
                <td><?php echo $vreg[2]?></td>
                <td><?php echo $vreg[3]?></td>
                <td><?php echo $vreg[4]?></td>
              
            </tr>
             
            <?php
}
            ?>

        </tbody>
    </table>

  </div>

     <input type='reset' id="visusu" class="val"   value="desmarcar">
    <!--<div id="banirusudel" class="val"><legend class="validar">Banir<legend></div>-->

    <input type="submit" id="banirusudel" class="val" value="deletar" name="enviardelusu">
  </form>
   
        <div id="infomaiorcomentusu" class="infomaiorcoment">
         <input type="checkbox" id="infocom"> <label for="infocom"><img src="img/fechar.png" id="fechimg" onclick="fechavisucom1()"></label></input>
        <div id="foto-usu"><img src="img/a.jpg"></div>
        <h1>Nome do Usuario : Rafael </h1>
        <h1>Login : rafaekcearaperderu</h1>
        <h1>Sexo: masculina</h1>
        <h1>E-mail: rafa@gmail.com</h1>
        <h1>Senha: ceara123</h1>

      </div>
      <!--
<div class="num-com-visu" id="num-com-visu1">
       <h1>74</h1>
      <legend>Usuário que mais comentou em notícias</legend>
    </div><br><br>-->
</div>
<!----------d--------------------------------terceira pag para verficar usuarios-------------------------------->
<!-------------------------------tela agora para alterar das noticias------------------------------------------------------>

<div id="teste3">
<img src="img/basicon.png" id="iconbas">
<img src="img/natacaoicon.png" id="iconnat">
<img src="img/lutaicon.png" id="licon">

<form class="pesquisa" id="buscanotiform">
<input type="search" class="texto" placeholder="BUSCAR" name="buscanoti" id="buscanoti">
<img src="img/lupa.png" class="btn" >
</form>
<form action="deletarnoti.php" method="POST" id="delnotiform" >
<div class="showtable" id="shownoti">
 <!-------------------------------php-------------------------!-->

<?php
    echo '
       <table class="tabelaEditavel">
        <thead>
            <tr>
                <th>Editar</th>
                <th>Marcado</th>
                <th>id notícia</th>
                <th>data</th>
                <th>autor</th>
                <th>fonte</th>
                <th>qtd de views</th>
                <th>título</th>
                <th>subtítulo</th>
            </tr>
        </thead>
        <tbody>
         
            <tr>';
            ?>
              <?php
              include('connection.php');
            $res= mysqli_query($con,"select * from noticia order by idnoticia DESC");
              while($vreg= mysqli_fetch_row($res)){
                 $dta=explode('-',$vreg[1]);
              ?>
             <td><a href='editarnot.php?idnoti=<?php echo $vreg[0];?>'>editar</a></td>
             <td><center><input type="checkbox" value="<?php echo $vreg[0];?>" name="noti[]"></center></td>
                <td><center><?php echo utf8_encode($vreg[0]);?></center></td>
                <td><center><?php echo "$dta[2]/$dta[2]/$dta[1]";?></td>
                <td><?php echo utf8_encode($vreg[2]);?></td>
                <td><?php echo  utf8_encode($vreg[3]);?></td>
                <td><?php echo utf8_encode($vreg[4]);?></td>
                <td><?php echo utf8_encode($vreg[6]);?></td>
                <td><?php echo utf8_encode($vreg[7]);?></td>
              
            </tr>
             
            <?php
}
            ?>

        </tbody>
    </table>



 <!-------------------------------php-------------------------!-->
</div>
     <input type='submit' value='deletar' id="visusu1" class="val" >
    <input type='reset' id="banirusu" class="val" value='desmarcar'>
   </form>
<!--edicao da noticia agora-->
   <div id='edicaonoti'>
<img src='img/xbranco.png' onclick='fechaedit1()' id='xbranco'/>
<div id='edicaocomtit'>
<h1 id='subtedicao1'>Edição da Noticia</h1>
<form action='editarnot.php' method='POST' id='ditnoti'>
<h1 id='altercorpo'>Corpo da noticia :</h1>
<textarea cols='55' rows='10' id='textaocomedite' name='newtextonoti'>
</textarea>
<input type='submit' value='Enviar' class='subedit'id='edit1' >
<input type='reset' value='Apagar' class='subedit' id='edit2'>
</form>

</div>
</div>
<script>
function fechaedit1(){
  a=document.getElementById("edicaonoti");
  a.style.display='none';
}
function abreedit1(){
  a=document.getElementById("edicaonoti");
  a.style.display='block';
}
</script>
<!-- fim da edicao da noticia agora-->
<div class="alterar">

</div>
<div id="ultimaspostagem">
  <fieldset id="postafiel">
  <legend>Novas postagens</legend>
<?php
include 'connection.php';
  $res=mysqli_query($con,"select * from noticia ORDER BY idnoticia DESC limit 4 ");
     while($vreg= mysqli_fetch_row($res)){

echo utf8_encode("
 <a href='secundarianoti.php?id=$vreg[0]' target='resource window'>$vreg[6]</a><br><br>
");
}
?>
  </fieldset>
</div>
</div>
<!-------------------------------tela agora para alterar das noticias------------------------------------------------------>
<div id="novadm">
  <?php
   $tempfotoadm=$_SESSION['fotoadm'];
     $sexoo=$_SESSION['sexo'];
      if ($tempfotoadm!="") {
echo "<div id='img-adm'><img src='fotoadm/$tempfotoadm' id='admimagevisualizar'/></div>";
}else{
  if ($sexoo=="masculino") {
 echo "<div id='img-adm'><img src='img/usuario.png' id='admimagevisualizar'/></div>";
  }
  else{
 echo "<div id='img-adm'><img src='img/usufeminino.png' id='admimagevisualizar'/></div>";
  }
}
?>
<div id="informacoesdoadm">
  <?php
  session_start();
  $idadm=$_SESSION['idadm'];
  include 'connection.php';
$sql= "select * from admin where idadm='$idadm'";
$res=mysqli_query($con,$sql);
while($vreg= mysqli_fetch_row($res)){
      $nadm=$vreg[1];
       $emadm=$vreg[2];
         $sadm=$vreg[3];
          $seadm=$vreg[4];
          $loadm=$vreg[5];
          echo "
<h1>Nome : <span>$nadm</span></h1>
<h1>Login : <span>$loadm</span></h1>
<h1>Senha : <span>$sadm</span></h1>
<h1>Sexo : <span>$seadm<span></h1>
<h1>Email :<span> $emadm<span></h1>

  ";
}
   ?>
</div>
<div class="alterar">
<form>
<fieldset id="alterafiel" class="alterafiel">
<legend>Alterar suas informações</legend>
<h1>Nome:</h1>    <input tpe="text" class="cu1" size="50" maxlength="15" placeholder="" name="nomeadm">
<h1>Senha:</h1>  <input tpe="text" class="cu1" size="50" maxlength="15" placeholder="" name="senhaadm">
<h1>Sexo:</h1>  <input tpe="text" class="cu1" size="50" maxlength="15" placeholder="" name="sexoadm">
<h1>Email</h1>    <input tpe="text" class="cu1" size="50" maxlength="15" placeholder="" name="emailadm">
<div id="enviaralterar"><h1>Enviar</h1></div>
<input type="submit">
</fieldset>
</form>
   <?php
   $nomeadm= isset($_POST['nomeadm'])?$_POST['nomeadm']:null;
   $senhaadm=isset($_POST['senhaadm'])?$_POST['senhaadm']:null;
   $sexoadm=isset($_POST['sexoadm'])?$_POST['sexoadm']:null;
   $emailadm=isset($_POST['emailadm'])?$_POST['emailadm']:null;
  
  
   
   ?>
</div>
<div  class="val" id="valadm" onclick="abrealterainfo1()"><legend class="validar">novo adm<legend></div>
<div class="val" id="valalt" onclick='abreedit()' ><legend class="validar">Alterar<legend></div>
<!--olallllllllllllllllllllllllllllllllllllll-->
<div id='edicaocom'>
<img src='img/xbranco.png' onclick='fechaedit()' id='xbranco'/>
<div id='edicaocomtit'>
<h1 id='subtedicao'>Edição de dados do Admin</h1>
</div>
<form action='dadosadmninaltera.php' method='POST' id='ditcom'>
<label for='nomealter' id='later1' >Nome :</label><input type='text' maxlength='100' size='40' placeholder='você pode deixar em branco..' id='nomealter' name='nomealter' >
<label for='emailalter'  id='later2'>Email :</label><input type='text' maxlength='100' size='40' placeholder='você pode deixar em branco..' id='emailalter' name='emailalter'>
<label for='senhaalter'  id='later3'>Senha :</label><input type='text' maxlength='100' size='40' placeholder='você pode deixar em branco..' id='senhaalter' name='senhaalter'>
<input type='submit' value='Enviar' class='subedit'id='edit1' >
<input type='reset' value='Apagar' class='subedit' id='edit2'>
</form>

</div>

<!--olallllllllllllllllllllllllllllllllllllll-->
<div class="alterar" id="alterarnovoadm">
<form action="adm1.php" method="POST" enctype="multipart/form-data">
<fieldset id="alterafiel1" class="alterafiel">
<legend>Novo Administrador</legend>
<h2>Carregue a foto de seu perfil aqui:</h1><input type="file" name="footo-adm">
<h1>Nome:</h1>    <input tpe="text" name="a" class="cu1" size="50" maxlength="100" placeholder="digite o seu nome.." required>
<h1>Login:</h1>  <input tpe="text" name="b" class="cu1" size="50" maxlength="100" placeholder="digite seu login.." required>
<h1>Senha:</h1>  <input tpe="text" name="c" class="cu1" size="50" maxlength="100" placeholder="digite sua senha.." required>
<h1>Sexo:</h1>  <input type="radio" name="d"  required value="masculino">Masculino   <input type="radio" name="d"  required value="feminino">Feminino
<h1>Email</h1>    <input tpe="text" name="e" class="cu1" size="50" maxlength="100" placeholder="digite seu email.." required>
<input type="submit" id="enviaralterar" name="admaevia">
</fieldset>
</form>
</div>
<?php
         $a=isset($_POST['a'])?$_POST['a']:null;//nome
         $b=isset($_POST['b'])?$_POST['b']:null;//login
         $c=isset($_POST['c'])?$_POST['c']:null;//senha
         $d=isset($_POST['d'])?$_POST['d']:null;//sexo
         $e=isset($_POST['e'])?$_POST['e']:null;//email
         if (isset($_POST['admaevia'])):
//criando um array com os formatos permitidos
	$formatosPermitidos = array("png","jpeg","jpg","JPG",'JPEG','PNG');

   //var_dump($_FILES);
  
$extensao =pathinfo($_FILES['footo-adm']['name'],PATHINFO_EXTENSION);//funcao para peggar a extensao
	//echo" $extensao";

	//agora verificando se aquela extensao existe no noosso arrya
	if(in_array($extensao,$formatosPermitidos)):
	//echo "existe";
		$pasta ="fotoadm/";   //para onde vai
	    $temporario=$_FILES['footo-adm']['tmp_name'];
	    $novoNom= uniqid().".$extensao";
	    if(move_uploaded_file($temporario,$pasta.$novoNom)):
	    	$mensagem= "Uploaf feito com sucesso";
              $f= new Administrador();
              $f->cadastraradm($a, $b, $c, $d, $e,$novoNom);
	   
	    else:
	    	$mensagem= "erro,nao foi possivel fazer o upload";
	    endif;
     else:
     	//echo "nao existe";
             echo "<script>alert('insira uma imagem nos padroes desejados')</script>";
     endif;
    
	endif;
  
?>
</div>
</div><!--fim da area preencher-->
<div id="menu-adm">
<ul id="a">
<li class="lista" id="publicar" onclick="oi()"><img src="img/novo.png "></img>Pulicar Notícias</li></li>
<li class="lista"  id="comenta" onclick="oi1()"><img src="img/comentar.png "></img>Visualizar comentários</li>
<li class="lista"  id="usuario" onclick="oi2()"><img src="img/usuario.png " onclick=""></img>Verificar Usuários</li>
<li  class="lista"  id="noticia" onclick="oi3()"><img src="img/olho.png " onclick="">Alterar notícias</li>
<li class="lista"  id="excluir" onclick="oi4()"><img src="img/cancelar.png " onclick="">Novo Administrador</li>
</ul>
</div>



<!-------------------------------tela ultima do gerenciador de admini------------------------------------------------------>



<!-----------------------------------------------tela agora das noticias-------------------------------------------------------->

<script>

function fechaedit(){
  a=document.getElementById("edicaocom");
  a.style.display="none";
}
function abreedit(){
    a=document.getElementById("edicaocom");
  a.style.display="block";
}


function oi(){
c1=document.getElementById("teste2");
a1=document.getElementById("publicarnoticias");
b1=document.getElementById("teste");
d1=document.getElementById("teste3");
e1=document.getElementById("novadm");
  a1.style.display="block";
  b1.style.display="none";
  c1.style.display="none";
  d1.style.display="none";
 e1.style.display="none";
}
function oi1(){
c1=document.getElementById("teste2");
a1=document.getElementById("publicarnoticias");
b1=document.getElementById("teste");
d1=document.getElementById("teste3");
e1=document.getElementById("novadm");
  a1.style.display="none";
  b1.style.display="block";
  c1.style.display="none";
  d1.style.display="none";
 e1.style.display="none";
}
function oi2(){
c1=document.getElementById("teste2");
a1=document.getElementById("publicarnoticias");
b1=document.getElementById("teste");
d1=document.getElementById("teste3");
e1=document.getElementById("novadm");
  a1.style.display="none";
  b1.style.display="none";
  c1.style.display="block";
  d1.style.display="none";
 e1.style.display="none";
}
function oi3(){
c1=document.getElementById("teste2");
a1=document.getElementById("publicarnoticias");
b1=document.getElementById("teste");
d1=document.getElementById("teste3");
e1=document.getElementById("novadm");
  a1.style.display="none";
  b1.style.display="none";
  c1.style.display="none";
  d1.style.display="block";
 e1.style.display="none";
}
function oi4(){
c1=document.getElementById("teste2");
a1=document.getElementById("publicarnoticias");
b1=document.getElementById("teste");
d1=document.getElementById("teste3");
e1=document.getElementById("novadm");
  a1.style.display="none";
  b1.style.display="none";
  c1.style.display="none";
  d1.style.display="none";
 e1.style.display="block";
}


function ak(){
a=document.getElementById("menulog");
a.style.display="block";
}
function saimenuusuario(){
a=document.getElementById("menulog");
a.style.display="none";
}

function fechavisucom(){
   var a=document.getElementById("infomaiorcomentcomen");
   a.style.display="none";
}
function abrevisucom(){
     var a=document.getElementById("infomaiorcomentcomen");
   a.style.display="block";
}//klklk
function fechavisucom1(){
   var a=document.getElementById("infomaiorcomentusu");
   a.style.display="none";
}
function abrevisucom1(){
     var a=document.getElementById("infomaiorcomentusu");
   a.style.display="block";
}
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
function abrealterainfo(){
  a=document.getElementById('alterafiel');
  a.style.display="block";
}
function abrealterainfo1(){
  a=document.getElementById('alterarnovoadm');
    a.style.display="block";
}

</script>

<!--script de upload para precarregamento-->
<script type="text/javascript">
$("#fo").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#foto-da-noticia");
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
//para alterar dados do usuario
  $(document).ready(function(){

    $(document).on('submit','#ditcom',function(event){
        event.preventDefault();
        var dados=$(this).serialize();
        res=confirm("Deseja mesmo realizar esta ação ?");
        if (res) {
        $.ajax({
            url: 'dadosadmninaltera.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#informacoesdoadm').html(data);
            }
        });
}
    });


});
  // fim para alterar dados do usuario
 $(document).ready(function(){

        $('#buscacom').keyup(function(){

            $('#formcom').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'listacom.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('#showtable').empty().html(data);
                    }
                });

                return false;
            });

            $('#formcom').trigger('submit');

        });
    });
 $(document).ready(function(){

        $('#pesusuario').keyup(function(){
            $('#pesformusu').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'listausu.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('#showusu').empty().html(data);
                    }
                });

                return false;
            });

            $('#pesformusu').trigger('submit');

        });
    });
  $(document).ready(function(){

        $('#buscanoti').keyup(function(){

            $('#buscanotiform').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'listanoti.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('#shownoti').empty().html(data);
                    }
                });

                return false;
            });

            $('#buscanotiform').trigger('submit');

        });
    });
 $(document).ready(function(){

    $(document).on('submit','#delusuform',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'deletarusu.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#showusu').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});
  $(document).ready(function(){

    $(document).on('submit','#ditnoti',function(event){
       event.preventDefault();
      var dados=$(this).serialize();
      var res=confirm("Deseja realizar mesmo esta ação ?");
      if (res) {
        if(dados==""){
          alert("Você precisa selecionar ao menos um registro!");
        }else{
        $.ajax({
            url: 'edinot1.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#a').html(data);
            }
        });
        //coloco aqui o resto das chaves
      }
      }
    });


});
///editar notti
$('#shownoti').on('click','a',function(event){
  event.preventDefault();
  var urlget=this.href;
  var envio2 = $(this).serialize();
  

  $.ajax({

    url:urlget,
    dataType: 'html',
    data: envio2,
    type: 'GET',
    success: function(data){

      $('#edicaonoti').html(data);
    }
  });

  return false;

});


///
 $('#showusu').on('click','a',function(event){
  event.preventDefault();
  var urlget=this.href;
  var envio2 = $(this).serialize();
  

  $.ajax({

    url:urlget,
    dataType: 'html',
    data: envio2,
    type: 'GET',
    success: function(data){

      $('#infomaiorcomentusu').html(data);
    }
  });

  return false;

});
  $('#showtable').on('click','a',function(event){
  event.preventDefault();
  var urlget=this.href;
  var envio2 = $(this).serialize();
  

  $.ajax({

    url:urlget,
    dataType: 'html',
    data: envio2,
    type: 'GET',
    success: function(data){

      $('#infomaiorcomentcomen').html(data);
    }
  });

  return false;

});
  $(document).ready(function(){

    $(document).on('submit','#delnotiform',function(event){
        event.preventDefault();
        var dados=$(this).serialize();
        res=confirm("Deseja mesmo realizar esta ação ?");
        if (res) {
            if (dados=="") {
          alert("Você precisa selecionar ao menos um registro!");
            }else{
        $.ajax({
            url: 'deletarnoti.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#shownoti').html(data);
            }
        });
}
}
    });


});
   $(document).ready(function(){

    $(document).on('submit','#altervalcom',function(event){
        event.preventDefault();
        var dados=$(this).serialize();
        res=confirm("Deseja mesmo realizar esta ação?");
          if (res) {
           if(dados==""){
            alert("Você precisa selecionar ao menos um registro!");
           }else{
        $.ajax({
            url: 'validacom.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#showtable').html(data);
            }
        });
      }
    }
    });


});

</script>
<style>

</style>
</body>







</html>