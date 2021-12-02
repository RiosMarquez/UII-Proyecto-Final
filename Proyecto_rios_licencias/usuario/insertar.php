<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nac=$_POST['fecha_nac'];
$correo=$_POST['correo'];
$curp=$_POST['curp'];
$contraseña=$_POST['contraseña'];


$sql="INSERT INTO usuario (nombre,apellido,fecha_nac,correo,curp,contraseña) VALUES('$nombre','$apellido','$fecha_nac','$correo','$curp','$contraseña')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>