<?php header("Content-type: text/html ; charset=utf-8",true);?>
<html>
<head>
<title>Validando Formulários com Javascript</title>
<script language="javascript" type="text/javascript">
function validar() {

var email = form1.email.value;
var senha = form1.senha.value;
if (email == "") {
alert('Preencha o campo com seu email');
form1.email.focus();
return false;
}

if (senha == "") {
alert('Preencha o campo com sua senha');
form1.senha.focus();
return false;
}

}
</script>
<style>
body{
    margin: 0;
    padding: 0;
    background: url(img/crak.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 420px;
    background-color: rgba(10,23,55,0.5);
	border-radius:30px;
    color: #aeaeae;
    position: absolute;
    margin-top:100px;
	margin-left:650px;
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width:100px;
    height:100px;
    border-radius:60px;
    position: absolute;
    top: -70px;
    left:110px;
}
h1{
    margin: 0px;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
	
}
.login-box input{
    width: 270px;
    margin-bottom: 10px;
}
.login-box input[type="text"],input[type="password"]{

    border: none;
    border-bottom: 1px solid white;
    background: transparent;
    outline: none;
    height: 50px;
    color: #aeaeae;
    font-size: 16px;
}
.login-box input[type="submit"]{
    margin-top:20px;
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
    background:#1c8adb;
    color: #000;
}

</style>
</head>
<body>
 <div class="login-box">
  <img src="img/admfoto.png" class="avatar">
  <h1>login</h1>
<form name="form1" action="login.php" method="post">
User:
<input name="email" type="text" placeholder="enter email"><br /><br />
Senha:
<input name="senha" type="password" placeholder="enter senha"><br /><br />
<input type="submit" name="Enviar" onclick="return validar()">
</form>
 <div>
<?php
    include "connection.php";
    if (isset($_POST['Enviar'])):
        # code...
    
       $a=isset($_POST['senha'])?$_POST['senha']:null;
      $b=isset($_POST['email'])?$_POST['email']:null;
        $sql="select * from usuariocomum where email_usuario ='$b' and senha_usuario='$a'";
        $res=mysqli_query($con,$sql);
     $ca=mysqli_affected_rows($con);
        if ($ca>0) {
          session_start();
         while($vreg= mysqli_fetch_row($res)){
         //$vreg[0]= isset($_SESSION['id'])?$_SESSION['id']:null;
        //$vreg[1]= isset($_SESSION['nome'])?$_SESSION['nome']:null; 
            $_SESSION['id']=$vreg[0];
            $_SESSION['nome']=$vreg[1];
         $_SESSION['fotousu']=$vreg[5];
          $_SESSION['sexo']=$vreg[4];

         header('Location: noticianews.php');
        mysqli_close($con);
      }
        }else{
             echo "<script>alert('Login ou senha incorretos!');</script>";
        }
     endif;
?>
</body>

</html>
