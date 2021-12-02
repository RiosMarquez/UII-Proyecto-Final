<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nac=$_POST['fecha_nac'];
$correo=$_POST['correo'];
$curp=$_POST['curp'];
$contraseña=$_POST['contraseña'];
$id=$_POST['id'];

$sql="UPDATE usuario SET  nombre='$nombre',apellido='$apellido',fecha_nac='$fecha_nac',correo='$correo',curp='$curp', contraseña='$contraseña' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>