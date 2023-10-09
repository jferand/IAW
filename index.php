<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba</title>
    </head>
    <body>
        <?php
        //declaracion de funcion
        function datos($nombre = ' ', $ciudad = ' ', $año = ' ') {
            echo "<div>$nombre nació en $ciudad en el año $año </div>";
        }
        //lamada a la funcion
        datos('Manolo', 'Granada', 2004);
        datos('Alvaro', 'Sevilla', 1978);
        ?>
    </body>
</html>
