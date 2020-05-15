<?php


include('connection.php');
$i=0;
foreach($_POST['noti'] as $checkbox){
	$sql="DELETE FROM `noticia` WHERE idnoticia=$checkbox";
    $res= mysqli_query($con,$sql);

    $i=$i+1;
 
}
   if ($i===1) {
 echo "<script>alert(' uma notícia apagada com sucesso');</script>";
   }else{
    echo "<script>alert(' $i notícias apagadas com sucesso');</script>";
   }

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
               include('connection.php');
            $res= mysqli_query($con,"select * from noticia order by idnoticia DESC");
              while($vreg= mysqli_fetch_row($res)){
                 $dta=explode('-',$vreg[1]);
              
             echo "
             <td><center><input type='checkbox' value='$vreg[0]' name='noti[]'></center></td>
                <td><center>$vreg[0]</center></td>
                <td><center>$dta[2]/$dta[1]/$dta[0]</td>
                <td>$vreg[2]</td>
                <td>$vreg[3]</td>
                <td>$vreg[4]</td>
                <td>$vreg[6]</td>
                <td>$vreg[7]</td>
              
            </tr>
             
           ";
}
           
echo "
        </tbody>
    </table>
";
?>