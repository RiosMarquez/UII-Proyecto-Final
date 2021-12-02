<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$localidad=$_POST['localidad'];
$no_empleados=$_POST['no_empleados'];
$horario=$_POST['horario'];
$comentarios=$_POST['comentarios'];
$id=$_POST['id'];

$sql="UPDATE sucursal SET  nombre='$nombre',direccion='$direccion',localidad='$localidad',no_empleados='$no_empleados',horario='$horario', comentarios='$comentarios' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>