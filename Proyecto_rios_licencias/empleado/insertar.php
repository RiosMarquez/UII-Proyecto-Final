<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nac=$_POST['fecha_nac'];
$direccion=$_POST['direccion'];
$sucursal=$_POST['sucursal'];
$area=$_POST['area'];


$sql="INSERT INTO empleado (nombre,apellido,fecha_nac,direccion,sucursal,area) VALUES('$nombre','$apellido','$fecha_nac','$direccion','$sucursal','$area')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>