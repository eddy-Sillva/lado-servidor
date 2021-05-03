<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarea7.php" method="post">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="submit" name="" value="Aceptar">
    </form>
</body>
<?php
if(isset($_POST['nombre']) || isset($_POST['usuario'])){
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $patron="/@[a-zA-Z0-9]+[\W](twitter|Twitter|TWITTER|instagram|Instagram|INSTAGRAM)\b/";
    if(preg_match($patron,$usuario)){
        $usuario=explode(" ",$usuario);
        if($usuario[1]=="twitter" || $usuario[1]=="TWITTER"){
            echo "nombre de usuario correcto: El usuario pertenece a ".$usuario[1];
        }else{
            if($usuario[1]=="instagram" || $usuario[1]=="INSTAGRAM"){
                echo "nombre de usuario correcto: El usuario pertenece a ".$usuario[1];
            }
        }
    }else{
        echo "El nombre de usuario no es correcto: ejemplo: @edwin twitter o @edwin instagram";
    }
}else{

}
?>
</html>