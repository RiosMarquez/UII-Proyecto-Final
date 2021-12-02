<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_reg=$_POST['fecha_reg'];
$localidad=$_POST['localidad'];
$horario=$_POST['horario'];
$sucursal=$_POST['sucursal'];
$id=$_POST['id'];

$sql="UPDATE citas SET  nombre='$nombre',apellido='$apellido',fecha_reg='$fecha_reg',localidad='$localidad',horario='$horario', sucursal='$sucursal' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: citas.php");
    }
?>