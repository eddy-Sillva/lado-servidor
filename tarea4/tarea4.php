<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseña</title>
</head>
<body>
    <form action="tarea4.php" method="post">
    <input type="text" placeholder="ingresa tu nombre" name="nombre">
    <input type="text" placeholder="Ingresa tu contraseña" name="contra">
    <input type="submit" value="Aceptar">
    </form>
</body>
<?php
if(isset($_POST['nombre']) && isset($_POST['contra'])){
    $nombre = $_POST['nombre'];
    $contra=$_POST['contra'];
    $patron="/[A-Z][a-z]{3}[\d]{2}[\W]{2}/";
    if(preg_match($patron,$contra)){
        echo $nombre." Tu contraseña es correcta";
    }else{
        echo $nombre." tu contraseña no es correcta";
    }
}
?>
</html>