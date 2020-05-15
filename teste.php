<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            
            <input type="text" name="a" required>
        <input type="text" name="b" required>
        <input type="text" name="c" required>
        <input type="text" name="d" required>
        <input type="text" name="e" required=>
        
        <input type="submit">
</form>
        <?php
          
         require_once 'Administrador.php';
         require_once 'Noticia.php';
         require_once 'connection.php';
         
         require_once 'Usuario.php';
         $a=$_POST['a'];
         $b=$_POST['b'];
         $c=$_POST['c'];
         $d=$_POST['d'];
         $e=$_POST['e'];
       
          $f= new Administrador();
          $f->cadastraradm($a, $b, $c, $d, $e);
    

    

        
                  
      ?>
 
    </body>
</html>
