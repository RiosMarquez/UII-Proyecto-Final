<?php

include("conexion.php");
$con=conectar();

$idempleado=$_GET['id'];

$sql="DELETE FROM empleado  WHERE id='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>