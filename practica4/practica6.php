<?php
$tel="7151033418";
$patron="/^[[:digit:]]+$/";
if(preg_match($patron,$tel)){
    echo "Tu telefono es valido";
}else{
    echo "Tu telefono es invalido";
}
?>