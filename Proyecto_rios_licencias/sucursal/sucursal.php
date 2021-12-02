<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM sucursal";
    $query=mysqli_query($con,$sql);

   // $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> SUCURSAL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <center><h1>Sucursal</h1></center>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="NOMBRE SUCURSAL">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="DIRECCION">
                                    <input type="text" class="form-control mb-3" name="localidad" placeholder="LOCALIDAD">
                                    <input type="text" class="form-control mb-3" name="no_empleados" placeholder="NUMERO DE EMPLEADOS">
                                    <input type="text" class="form-control mb-3" name="horario" placeholder="HORARIO">
                                    <input type="text" class="form-control mb-3" name="comentarios" placeholder="comentarios">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>direccion</th>
                                        <th>localidad</th>
                                        <th>Numero de empleados</th>
                                        <th>Horario</th>
                                        <th>Comentarios</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['localidad']?></th>
                                                <th><?php  echo $row['no_empleados']?></th>    
                                                <th><?php  echo $row['horario']?></th>
                                                <th><?php  echo $row['comentarios']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>