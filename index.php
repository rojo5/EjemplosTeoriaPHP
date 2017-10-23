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
<!--        <form method="post" action="equipo.php">
            ¿Cual es tu equipo favorito?
            <input name="equipo" type="text">
            <input name="entrenador" type="text">
            <br>
            <br>
            <input type="submit">
        </form>-->
        <?php
            $equipo = "Madrid";
            $entrenador = "Zidane";
            echo '<a href=equipo.php?equipo='.$equipo.'&entrenador='.$entrenador.'>Acceder</a>';
        ?>
        
        <!--<a href="equipo.php?equipo=equipo&entrenador=zidane">Acceder</a>-->
    </body>
</html>
