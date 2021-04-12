<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos numeros</title>
</head>
<body>
    <?php
    if($_POST){
        $num1=$_POST['numero1'];
        $num2=$_POST['numero2'];
        $suma=$num1+$num2;
        echo "La suma del numero: ".$num1." "."con el numero: ".$num2." "."Es: ".$suma;
    }
    ?>
    <h2>Suma de dos numeros con formulario HTML y programacion web PHP</h2>
    <form method="POST" action="sumarDosNumeros.php">
        <table>
            <tr>
            <td>Ingresa numero1: <input type="text" name="numero1" value=""></td>
            </tr>
            <tr>
            <td>Ingresa numero2: <input type="text" name="numero2" value=""></td>
            </tr>
            <tr>
            <td> <input type="submit" name="sumar"></td>
            </tr>
        </table>
    </form>
</body>
</html>