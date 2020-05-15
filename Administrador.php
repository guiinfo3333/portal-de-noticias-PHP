<?php

 
require_once 'Usuario.php';
class Administrador  extends Usuario {
    private $idadmin;
    public function getIdadmin() {
        return $this->idadmin;
    }

    public function setIdadmin($idadmin) {
        $this->idadmin = $idadmin;
    }

    
  function cadastraradm($a,$b,$c,$d,$e,$novoNom){
include 'connection.php';

$sq1="SELECT * FROM `admin` WHERE `loginadm` = '$b'";
$fica=mysqli_query($con,$sq1); 
$linha=mysqli_num_rows($fica);
echo "<script>alert('$linha');</script>";   
if ($linha==1 || $linha>1) {
    echo "<script>alert('Login já está sendo usado,insira um novo');</script>"; 
}else{
echo "<script>alert('$novoNom');</script>"; 
$sql= "INSERT INTO `admin`(`idadm`, `nomeadm`, `emailadm`, `senhaadm`, `sexo`, `loginadm`,`fotoadm`) VALUES (null,'$a','$e','$c','$d','$b','$novoNom')";
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('administtrador inserido com sucesso');</script>";    
} else {
    echo "<script>alert('falha no reggistro da gravação');</script>";  
}
}
mysqli_close($con);
}
    




  function alterarNoti(){
      
  }
  function excluirNoti(){
      
  }
function pesquisarNoti(){
    
}
function excluirCom(){
    
}
function listausu(){



  
}
function pesquisarCom(){
      include 'connection.php'; 
    $campo="'%".$_POST['pescomentario']."%'";

    $res=mysqli_query($con,"select * from comentario where produto like $campo");


    echo "
        <table>
            <thead>
            <tr>
                <td>Id</td>
                <td>Produtos</td>
                <td>Valor</td>
            </tr>
            </thead>

            <tbody>
            ";

             while($vreg= mysqli_fetch_row($res)){

            echo "
            <tr>
                <td>$vreg[0]</td>
                <td>$vreg[1]</td>
                <td>$vreg[2]</td>
            </tr>
            ";
            }

            echo "
            </tbody>
        </table>
    ";
   
}
function bloquearus(){
    
}
function publicarNoti($a,$b,$c,$d,$e,$f,$g){
    include 'connection.php';
  $sql="INSERT INTO `noticia`(`idnoticia`, `datapubli`, `autornoticia`, `fontenoticia`, `viewsnoticia`, `imagem`, `titulo`, `subtitulo`, `corpo`) VALUES (null,'$a','$b','$c','','$d','$e','$f','$g')";  
$res=mysqli_query($con,$sql);
$linhas= mysqli_affected_rows($con);
if ($linhas==1) {
 echo "<script>alert('Notícia inserida com sucesso');</script>";    
} else {
    echo "<script>alert('falha ao inserir a notícia,tente novamente');</script>";  
}
mysqli_close($con);
}
function validarcoment(){
     include 'connection.php';
     $sql ="select * from comentario ";
        $res = mysqli_query($con,$sql);
        while($vreg= mysqli_fetch_row($res)){  //essa funcao pega um linha e guarda no array
           $id=$vreg[0];                //e junto com este while ele vai pulando de linha em linha até quando esta funcao nao retornar mais nada
           $nome=$vreg[1]; 
           $login=$vreg[2]; 
           $senha=$vreg[3]; 
           
           echo"<br>"."$id =====    $nome  ====    $login  ====     $senha";
        }
       
    
   
        mysqli_close($con);
     
}
}