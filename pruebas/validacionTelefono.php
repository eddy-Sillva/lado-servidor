<?php 
if($_POST){
	$telefono = $_POST["telefono"];
	$nombre = $_POST["nombre"];
	$archivo = fopen("ladas.txt",'r');
	if ($archivo != false) {
		$arrayLadas = file("ladas.txt");
		if(validarDigitos($telefono)){
			$respuestaValidacion = validarLada($arrayLadas,$telefono);
			if (!is_null($respuestaValidacion)) {
			$respuestaValidacion = explode("\t",$respuestaValidacion);
			echo "<p style='font-size: 15px; font-family: Calibri'>Hola ".$nombre.". Tu numero: ".$telefono.", es valido y pertenece a ".$respuestaValidacion[0]." ya que, tu lada es ".$respuestaValidacion[1]."</p>";
		}else{
			echo "<p style='font-size: 15px; font-family: Calibri'>Lo sentimos ".$nombre." tu numero ".$telefono." no es valido no se encuentra en las ladas del país.</p>";
		}
		}else{
			echo "<p style='font-size: 15px; font-family: Calibri'>Los sentimos su numero de telefono no contiene los<br> 10 digitos necesarios o contiene un caracter que <br>no es un número</p>";
		}
		$respuestaValidacion = validarLada($arrayLadas, $telefono);
	}else{
		echo "<p style='font-size: 15px; font-family: Calibri'>El archivo de las ladas no se puede procesar.</p>";
	}
}


function validarDigitos($telefono){
	$patron = "/^[[:digit:]]{10}+$/";
	if(preg_match($patron, $telefono)){
		return true;
	}else{
		return false;
	}

}

function validarLada($ladas, $telefono){
	for ($i=0; $i < sizeof($ladas); $i++) {
			$digitos = 7;
			$particion = explode("\t",$ladas[$i]);
			$lada = trim($particion[1]);
			if(strlen($lada) == 2){
				++$digitos;
			}
			$patron = "/^".$lada."[[:digit:]]{".+$digitos."}+$/";
			if(preg_match($patron, $telefono) == true){
				return $ladas[$i];
			}
		}
		return null;
}
?> 