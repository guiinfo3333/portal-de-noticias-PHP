<?php
header("Content-type: text/html ; charset=utf-8",true);
include('connection.php');

    $campo="'%".$_POST['buscanoti']."%'";

    $res=mysqli_query($con,"select * from noticia where titulo like $campo order by idnoticia DESC");


   
    echo '
       <table class="tabelaEditavel">
        <thead>
            <tr>
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

             while($vreg= mysqli_fetch_row($res)){

            echo utf8_encode( "
            <tr>
                <td><center><input type='checkbox' value='$vreg[0]' name='noti[]'></center></td>
                <td>$vreg[0]</td>
                <td>$vreg[1]</td>
                <td>$vreg[2]</td>
                <td>$vreg[3]</td>
                 <td>$vreg[4]</td>
                  <td>$vreg[6]</td>
                   <td>$vreg[7]</td>

            
            ");
        
            }

            echo "
            </tbody>
        </table>
    ";
    ?>