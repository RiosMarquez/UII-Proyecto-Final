<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nac=$_POST['fecha_nac'];
$direccion=$_POST['direccion'];
$sucursal=$_POST['sucursal'];
$area=$_POST['area'];
$id=$_POST['id'];

$sql="UPDATE empleado SET  nombre='$nombre',apellido='$apellido',fecha_nac='$fecha_nac',direccion='$direccion',sucursal='$sucursal', area='$area' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>