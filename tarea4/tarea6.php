<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarea6.php" method="post">
    <input type="text" name="nombre">
    <input type="text" name="web">
    <input type="submit" value="Aceptar">
    </form>
</body>
<?php
if(isset($_POST['nombre']) || isset($_POST['web'])){
    $nombre = $_POST['nombre'];
    $web = $_POST['web'];
    $patron="/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/";
    if(preg_match($patron,$web)){
        echo "Pagina web correcta ".$web;
    }else{
        echo "pagina web incorrecta ".$web;
    }
}
?>
</html>