<?php


include('connection.php');
$i=0;
foreach($_POST['usu'] as $checkbox){
	$sql="DELETE FROM `usuariocomum` WHERE idusuario=$checkbox";
    $res= mysqli_query($con,$sql);

    $i=$i+1;
 
}
   if ($i===1) {
 echo "<script>alert(' um usuário apagado com sucesso');</script>";
   }else{
    echo "<script>alert(' $i registros apagados com sucesso');</script>";
   }

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
               include('connection.php');
            $res= mysqli_query($con,"select * from usuariocomum");
              while($vreg= mysqli_fetch_row($res)){
              
             echo "
                  <td><center><a href='adm1.php?a=$vreg[0]'>abrir</a></center></td>
             <td><center><input type='checkbox' value=' $vreg[0]' name='usu[]' id='usu[]'></center></td>
                <td><center> $vreg[0]</center></td>
                <td>$vreg[1]</td>
                <td> $vreg[2]</td>
                <td>$vreg[3]</td>
                <td> $vreg[4]</td>
              
            </tr>
             
           ";
}
           
echo "
        </tbody>
    </table>
";
?>