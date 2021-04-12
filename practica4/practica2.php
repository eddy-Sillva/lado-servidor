<?php
$str="Hola alumnos del tecnm";
$patron="hola";
if(preg_match("/".$patron."/i",$str)){
    echo "La expresion: ".preg_replace("/".$patron."/i","Hello",$str)." Fue encontrada: "." En la cadena ".$str;
}else{
    echo "No encontrado";
}
?>