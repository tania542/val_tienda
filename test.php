<?php

include("conexion.php");

if($conexion){
echo "Conectado a la base de datos";
}else{
echo "Error de conexión";
}

?>