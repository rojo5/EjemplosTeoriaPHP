<!DOCTYPE html>
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
        <style> div{ border: 23px solid black</style>
             </head>
             <body>
                 <?php
              function suma ($nota = 0 , $nota2 = 0){
                  $resul = ($nota + $nota2)/2;
                  return $resul;
              }
              
              echo suma();
              echo "<br>". suma(5,3);
              
                 ?>
             </body>
        </html>
