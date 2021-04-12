<?php
$mensaje="Hola profesor mi tarea en moodle no fue calificada con fecha del 21 de marzo del 2021 le dejo mi correo en espera de su respuesta edwin.jesus.silva@gmail.com";
$patron1="/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b/";
if(preg_match($patron1,$mensaje)){
    echo "Tu correo electronico es correcto";
}else{
    echo "TU correo electronico es incorrrecto";
}
?>