<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direcciones ip</title>
</head>
<body>
<form action="tarea5.php" method="post">
<input type="text" name="nombre" placeholder="nombre">
<input type="text" name="ip" placeholder="IP">
<input type="submit" value="Aceptar">
</form>
</body>
<?php
if(isset($_POST['nombre']) || isset($_POST['ip'])){
    $nombre = $_POST['nombre'];
    $ip = $_POST['ip'];
    $patron="/^((25[0-5]|(2[0-4]|1[0-9]|[1-9]|)[0-9])(\.(?!$)|$)){4}$/";
    $ipPartida=explode(".",$ip);
    if(preg_match($patron,$ip)){
        if($ipPartida[0]=="10" && $ipPartida[1]<="255"){
            echo "direccion ip correcta ".$ip." Tipo A";
        }else{
            if($ipPartida[0]=="172" && (($ipPartida[1]<="31" && $ipPartida[1]>="16")|| ($ipPartida[1]>="16" && $ipPartida[1]<="31"))){
                echo "direccion ip correcta ".$ip." Tipo B";
            }else{
                if($ipPartida[0]=="192" && $ipPartida[1]<="168"){
                    echo "direccion ip correcta ".$ip." Tipo C";
                }else{
                    echo "direccion ip correcta ".$ip;
                }
            }
        }
    }else{
        echo "direccion ip incorrecta".$ip;
    }
}
?>
</html>