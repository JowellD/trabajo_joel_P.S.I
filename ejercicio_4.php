<?php

    if ($_POST){
        // recibir informacion  del formulario HTML {metodo POST}
        $txtNombre=$_POST['txtNombre'];
        $txtApellido=$_POST['txtApellido'];
        echo "hola ".$txtNombre." ".$txtApellido;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio_4.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id=""> 
        <br/>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <br/>
        <input type="submit" value="enviar">
    </form>
</body>
</html>