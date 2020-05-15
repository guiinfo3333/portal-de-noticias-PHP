<?php
header("Content-type: text/html ; charset=utf-8",true);
include('connection.php');

    $campo="'%".$_POST['buscacom']."%'";
 $sql="select c.idcomentario,u.nome_usuario,c.datacomentario,n.titulo,c.corpocomentario,c.validado from comentario as c join usuariocomum as u
on u.idusuario = c.idusuario
join noticia n
on n.idnoticia = c.idnoticia
where u.nome_usuario like $campo order by c.idcomentario DESC" ;
    $res=mysqli_query($con,$sql);


   
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
         
            ';

             while($vreg= mysqli_fetch_row($res)){

            echo  utf8_encode("
            <tr>
               <td><center><a id='valcomlink' href='maioresinfocom.php?b=$vreg[0]'>abrir</a></center></td> 
                <td><center><input type='checkbox' value='$vreg[0]' name='valcom[]'></center></td>
                <td>$vreg[1]</td>
                <td>$vreg[2]</td>
                <td>$vreg[3]</td>
               
            
            ");
             if($vreg[5]==1){
                echo "<td>validado</td></tr>";
              }else{
                echo "<td>negado</td></tr>";
              }
            }

            echo "
            </tbody>
        </table>
    ";
    ?>