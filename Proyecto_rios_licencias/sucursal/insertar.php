<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$localidad=$_POST['localidad'];
$no_empleados=$_POST['no_empleados'];
$horario=$_POST['horario'];
$comentarios=$_POST['comentarios'];


$sql="INSERT INTO sucursal (nombre,direccion,localidad,no_empleados,horario,comentarios) VALUES('$nombre','$direccion','$localidad','$no_empleados','$horario','$comentarios')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sucursal.php");
    
}else {
}
?>