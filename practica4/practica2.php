<?php
$str="Hola alumnos del tecnm";
$patron="/hola/i";
$cant=preg_match_all($patron,$str);
echo "La expresion: ".$patron." Fue encontrada: ".$cant." Veces"." En la cadena ".$str;
?>