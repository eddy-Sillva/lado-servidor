<?php
$cadena="Este texto es una cadena de prueba";
$patron="de";
$encontrada=preg_match_all("/".$patron."/i",$cadena,$coincidencias,PREG_OFFSET_CAPTURE);
$i=0;
?>