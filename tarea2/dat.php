<?php
if ($_GET){
    $numero1=$_GET["numero"];
    $numero2=$_GET["numero2"];
    echo "<center><h1>Tarea de los operadores</h1></center>";
    echo "<center><h1>Operadores aritmeticos * / + - %</h1></center>";
    echo "<center>La multiplicacion del numero: ".$numero1." Con el numero: ".$numero2." Es: ".$numero1*$numero2."<br/></center>";
    echo "<center>La division del numero: ".$numero1." Con el numero: ".$numero2." Es: ".$numero1/$numero2."<br/></center>";
    echo "<center>La Suma del numero: ".$numero1." Con el numero: ".$numero2." Es: ".$numero1+$numero2."<br/></center>";
    echo "<center>La Resta del numero: ".$numero1." Con el numero: ".$numero2." Es: ".$numero1-$numero2."<br/></center>";
    echo "<center>El porcentaje del numero: ".$numero1." Con el numero: ".$numero2." Es: ".$numero1%$numero2."<br/></center>";
    echo "<center><h1>Operadores de comparacion == != > < %</h1></center>";
    if($numero1==$numero2){
        echo "<center>El numero: ".$numero1." Con el numero: ".$numero2." Son iguales: "."<br/></center>";
    }
    if($numero1!=$numero2){
        echo "<center>El numero: ".$numero1." Con el numero: ".$numero2." Son diferentes: "."<br/></center>";
    }
    if($numero1<$numero2){
        echo "<center>El numero: ".$numero1." Es menor al numero: ".$numero2."<br/></center>";
    }
    if($numero1>$numero2){
        echo "<center>El numero: ".$numero1." Es mayor al numero: ".$numero2."<br/></center>";
    }
    echo "<center><h1> Operadores de incremento ++variable --variable variable++ variable--</h1></center>";
    echo "<center>Incrementando el numero: ".++$numero1."<br/></center>";
    echo "<center>Decrementando el numero: ".--$numero2."<br/></center>";
    echo "<center>Haciendo un POST-INCREMENTO: ".$numero1++."<br/></center>";
    echo "<center>Haciendo un POST-DECREMENTO: ".$numero2--."<br/></center>";
    echo "<center><h1>Operadores Logicos && || xor</h1></center>";
    if($numero1>1 && $numero2>1){
        echo "<center>El numero: ".$numero1." Con el numero: ".$numero2." Son mayores: "."<br/></center>";
    }
    if($numero1>1 || $numero2>1){
        echo "<center>El numero: ".$numero1." o el numero: ".$numero2." son mayores : "."<br/></center>";
    }
    if($numero1>1 xor $numero2==0){
        echo "<center>El numero: ".$numero1." o el numero: ".$numero2. " Se cumple su condicion"."<br/></center>";
    }
}
?>