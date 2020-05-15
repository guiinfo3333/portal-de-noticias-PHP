<?php

include('connection.php');

    $campo="'%".$_POST['pesusuario']."%'";

    $res=mysqli_query($con,"select * from usuariocomum where nome_usuario like $campo");


   
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
 
             while($vreg= mysqli_fetch_row($res)){

            echo utf8_encode("
            <tr>
                <td><center><a href='maioresinfouso.php?a=$vreg[0]'>abrir</a></center></td>
                <td><center><input type='checkbox' value='$vreg[0]' name='usu[]'></center></td>
                <td>$vreg[0]</td>
                <td>$vreg[1]</td>
                <td>$vreg[2]</td>
                <td>$vreg[3]</td>
                <td>$vreg[4]</td>
            ");
            
            }   //fecha o while

            echo "
            </tbody>
        </table>
       
    ";
    ?>