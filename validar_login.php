<?php
include("conexion.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios 
        WHERE correo='$correo' 
        AND password='$password'";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado)>0){
    header("Location: admin.php");
}else{
    echo "Usuario o contraseña incorrectos";
}
?>