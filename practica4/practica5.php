<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar correo</title>
</head>
<body>
    <form action="practica5.php" method="POST">
    <textarea name="datos" id="" cols="100" rows="30" placeholder="Ingrese su sugerencia"></textarea>
    <input type="submit" value="ACEPTAR"name="">
    </form>
</body>
</html>
<?php
if(isset($_POST['datos'])){
    $mensaje=$_POST["datos"];
    $patron1="/\b[L0-9]{9,9}+@[A-Za-z0-9.-]+\.tecnm.mx\b/";
    $encontrado = preg_match_all($patron1, $mensaje, $coincidencias, PREG_OFFSET_CAPTURE);
if(preg_match($patron1,$mensaje)){
    foreach ($coincidencias[0] as $coincide) {
		echo "<p>Tu correo electronico es correcto: '$coincide[0]'</p><br/>";
        break;
	}
    echo "";
}else{
    $patron="/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b/";
    $encontrado = preg_match_all($patron, $mensaje, $coincidencias, PREG_OFFSET_CAPTURE);
    foreach ($coincidencias[0] as $coincide) {
		echo "<p>Tu correo electronico es incorrecto: '$coincide[0]'</p><br/>";
        break;
	}
}
}
?>