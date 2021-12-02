<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_reg=$_POST['fecha_reg'];
$localidad=$_POST['localidad'];
$horario=$_POST['horario'];
$sucursal=$_POST['sucursal'];


$sql="INSERT INTO citas (nombre,apellido,fecha_reg,localidad,horario,sucursal) VALUES('$nombre','$apellido','$fecha_reg','$localidad','$horario','$sucursal')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: citas.php");
    
}else {
}
?>