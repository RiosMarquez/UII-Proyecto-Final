<?php

include("conexion.php");
$con=conectar();

$idcitas=$_GET['id'];

$sql="DELETE FROM citas  WHERE id='$idcitas'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: citas.php");
    }
?>