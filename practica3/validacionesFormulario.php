<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formulario con php</title>
    <style>
    .error{
        color:#FF0000;
    }
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $comentario = $email = $gender = $website = "";
    $tamanio=0;
    $tamanio2=0;
    $servicioCorreo="";
    $malasPalabras="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr="Falta el nombre";
        }else{
            $name=test_input($_POST["name"]);
            $tamanio=tamanio($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nameErr="Solo letras o espacios en blanco";
            }
        }
        if(empty($_POST["email"])){
            $emailErr="Correo electronico necesario";
        }else{
            $email=test_input($_POST["email"]);
           $servicioCorreo= saberEmail($email);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr="El formato de correo electronico es incorrecto";
            }
        }
        if(empty($_POST["web"])){
            $websiteErr="Website necesario";
        }else{
            $website=test_input($_POST["web"]);
            $tamanio2=vocales($website);
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.:]*[-a-z0-9+&@#\/%?=~_|]/i",$website)){
                $websiteErr="El formato del website errone";
            }
        }
        if(empty($_POST["comentario"])){
            $comentario="";
        }else{
            $comentario=test_input($_POST['comentario']);
            $malasPalabras=groseria($comentario);
        }
        if(empty($_POST["genero"])){
            $genderErr="Falta el genero";
        }else{
            $gender=test_input($_POST['genero']);
        }
    }
    function test_input($dato){
        $dato=trim($dato);
        $dato=stripslashes($dato);
        $dato=htmlspecialchars($dato);
        return $dato;
    }
    function tamanio($dato){
        return $tamanio=strlen(str_replace(' ','',$dato));
    }
    function vocales($dato){
        $a=substr_count($dato, 'a');
        $e=substr_count($dato, 'e');
        $i=substr_count($dato, 'i');
        $o=substr_count($dato, 'o');
        $u=substr_count($dato, 'u');
        $resultado=$a+$e+$i+$o+$u;
        return $resultado;
    }
    function saberEmail($dato){
        $porciones = explode("@", $dato);
        if(strcmp($porciones[1],"gmail.com")== 0){
            return "Servicio de google";
        }else{
            if(strcmp($porciones[1],"hotmail.com")== 0 || strcmp($porciones[1],"outlook.com")== 0 ){
                return "Servicio de microsoft";
            }else{
                if(strcmp($porciones[1],"yahoo.com")== 0){
                    return "Servicio de yahoo";
                }else{
                    return "Cuenta institucional";
                }
            }
        }
    }
    function groseria($dato){
        $os = array("wey", "mamon", "pendejo", "invecil","puto","mierda","sorete","boludo","verga");
        $dato=strtolower($dato);
        $arreglo=explode(" ",$dato);
        for ($i=0; $i < count($arreglo); $i++) {
            if (in_array($arreglo[$i], $os)) {
                return "Porfavor no ingrese malas palabras";
            }
            # code...
        }
    }
    ?>
    <h2>PHP para validacion de formulario</h2>
    <p><span class="error">*campos obligatorios</span></p>
    <form action="validacionesFormulario.php" method="post">
   Nombre: <input type="text" name="name" placeholder="Ingresa tu nombre"> <br>
    <span class="error"><?php echo $nameErr ?></span><br><br>
   Correo electronico: <input type="email" name="email" placeholder="Ingresa tu direccion de correo"><br>
    <span class="error"><?php echo $emailErr ?></span><br><br>
    Sitio web: <input type="text" name="web" placeholder="Ingresa tu sitio web"><br>
    <span class="error"><?php echo $websiteErr ?></span><br><br>
    Genero: <input type="text" name="genero" placeholder="Ingresa tu genero"><br><br>
    <span class="error"><?php echo $genderErr ?></span><br><br>
    <textarea name="comentario" rows="10" cols="50" placeholder="Este campo no es obligatorio pero recuerda que puedes mandar uno"></textarea><br><br>
    <input type="submit" value="Aceptar"><br><br>
    </form>
    <p><?php echo $name." "."Su cantidad de caracteres es de: "." ".$tamanio."<br> ".$email." El servicio de este correo es: ".$servicioCorreo."<br> ".$website." El total de vocales en el sitio web es de: "." ".$tamanio2."<br> ".$gender."<br> ".$comentario." ".$malasPalabras?></p>
</body>
</html>