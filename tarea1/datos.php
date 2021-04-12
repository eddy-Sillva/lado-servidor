<?php
if($_POST){
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['telefono']) && isset($_POST['group3']) && isset($_POST['nacimiento'])
    && isset($_POST['direccion']) && isset($_POST['contraseña']) && isset($_POST['repetir']) && isset($_POST['correo'])){
        $array = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "telefono" => $_POST['telefono'],
            "sexo" => $_POST['group3'],
            "nacimiento" => $_POST['nacimiento'],
            "direccion" => $_POST['direccion'],
            "contrasenia" => $_POST['contraseña'],
            "repetir" => $_POST['repetir'],
            "correo" => $_POST['correo'],
        ];
    }else{
        echo "Por favor llene todos los campos";
    }
        echo "El nombre que ingresaste es: ".ucfirst($array['nombre'])."<br>" ;
        echo "Los apellidos ingresados son: ".ucfirst($array['apellido'])."<br>";
        echo "El sexo ingresado es: ".ucfirst($array['sexo'])."<br>";
        echo "La fecha de nacimiento ingresada es: ".$array['nacimiento']."<br>";
        echo "La direccion registrada es: ". $array['direccion']."<br>";
            echo "El numero telefonico es: ".intval($array['telefono'])."<br>";
        if($array['contrasenia']==$array['repetir']){
            echo "La contraseña ingresada es: ".$array['contrasenia']."<br>";
        }else{
            echo "Las contraseñas no coinciden"."<br>";
        }
        echo "El correo electronico ingresado es: ". $array['correo']."<br>";

}
?>