<?php header("Content-type: text/html ; charset=utf-8",true);?>
<html>
<head>
    <title> </title>
    <style>
	body{
    margin: 0;
    padding: 0;
    background: url(img/futebol.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
	
}
.login-box{
    width:380px;
	height:800px;
   background-color: rgba(10,23,55,0.5);
    color: black;
    position: absolute;
    margin-top:100px;
	left:600px;
    box-sizing: border-box;
    padding: 70px 30px;
	border-radius:80px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 45px;
    position: absolute;
    top: -80px;
    left:135px;
}
h1{
   
	margin-top:0px;
    padding: 2 20px;
    text-align: center;
    font-size: 28px;
	color:white;
}
.login-box p{
    margin:0px;
    padding:0px;
    font-weight: bold;
	color:white;
}

.login-box input{
    width: 300px;
    margin-bottom:20px;
	margin-left:0px;
	
}
.login-box input[type="text"],input[type="password"]{

    border: none;
    border-bottom: 2px solid #aeaeae;
    background: transparent;
    outline: none;
    height: 40px;
    color: white;
    font-size: 16px;

	
}

input[type="radio"]{
     border: none;
    border-bottom: 2px solid #aeaeae;
    background: transparent;
    outline: none;
    height: 30px;
    color: white;
    font-size: 10px;

}
.login-box input[type="submit"]{
    margin:-10px;
	margin-left:5px;
    border: none;
    outline: none;
    height: 45px;
    background: #aeaeae;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover{

    cursor: pointer;
    background: #1c8adb;
    color:white;
}
#mas{
position:relative;
top:30px;

}
#mas1{
position:relative;
top:25px;

}
fieldset{
position:relative;
left:-15px;
margin-left:0px;
top:-10px;
height:150px;
border-top:none;
border-left:none;
border-right:none;
}
legend{
  font-size:18px;
}

	</style>  
<script language="javascript" type="text/javascript">
function validar() {
var nome = form1.nome.value;
var email = form1.email.value;
var senha = form1.senha.value;
var rep_senha = form1.rep_senha.value;
if (nome == "") {
alert('Preencha o campo com seu nome');
form1.nome.focus();
return false;
}
if (email == "") {
alert('Preencha o campo com seu email');
form1.email.focus();
return false;
}
if (senha == "") {
alert('Preencha o campo com sua senha');
form1.rep_senha.value();
return false;
}
if (rep_senha == "") {
alert('Preencha o campo, comfirma a senha ');
form1.email.focus();
return false;
}
if (nome.length < 5) {
alert('Digite seu nome completo');
form1.nome.focus();
return false;
}
if (senha != rep_senha) {
alert('Senhas diferentes');
form1.senha.focus();
return false;
}
}
</script>

</head>
    <body>
	


    <div class="login-box">
    <img src="img/admimage.png" class="avatar">
<h1>cadastro</h1>
<form name="form1" action="cadastro.php" method="post">
 <p>Nome</p>
<input name="nome" type="text" placeholder="Digite o seu nome completo">
  <p>Email</p>
  <input name="email" type="text" placeholder="Digite o seu endereço de email">
  <fieldset>
  <p><legend>Sexo</legend></p>
<label for="r1"><p id="mas">Masculino</p><label><input name="sexo" type="radio" id="r1" value="masculino">
<label for="r2"><p id="mas1">Feminino</p></label><input name="sexo" type="radio" id="r2" value="feminino">
</fieldset>
 <p>Senha</p>
<input name="senha" type="password" placeholder="Digite sua senha">
<p>Repitir Senha</p>
<input name="rep_senha" type="password" placeholder="Confirme sua senha ">
<input type="submit"  onclick="return validar()" name="submitcas">
</form>  
 </div>
 <?php
  if (isset($_POST['submitcas'])):
      include "connection.php";
       $a=isset($_POST['nome'])?$_POST['nome']:null;
      $b=isset($_POST['email'])?$_POST['email']:null;
      $c=isset($_POST['sexo'])?$_POST['sexo']:null;
      $d=isset($_POST['senha'])?$_POST['senha']:null;
       
      $sql="select * from usuariocomum where email_usuario ='$b'";
      $sql1="INSERT INTO `usuariocomum`(`idusuario`, `nome_usuario`, `senha_usuario`, `email_usuario`, `sexo`) VALUES (null,'$a','$d','$b','$c')";
     $res=mysqli_query($con,$sql);
      $ca=mysqli_num_rows($res);
     if ($ca>0) {
         echo "<script>alert('login já está sendo usado tente outro!');</script>";
          mysqli_close($con);


     }else{
 $res= mysqli_query($con,$sql1);
 echo "<script>alert('cadastro realizado com sucesso');</script>";

echo "<script> window.location.href='noticianews.php';</script>";

     }

    endif; 
 
      ?>
</body>
</html>