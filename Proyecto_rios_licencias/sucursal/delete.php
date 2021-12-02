<?php

include("conexion.php");
$con=conectar();

$idsucursal=$_GET['id'];

$sql="DELETE FROM sucursal  WHERE id='$idsucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>