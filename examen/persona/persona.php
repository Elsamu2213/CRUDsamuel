<?php 
    include("../config/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM persona";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> EMPRESA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 class="text-muted"> ingrese datos de persona </h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="clave_ona" placeholder="clave de persona">
                                    <!-- agregar tipo de persona-->
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre ">
                                    <input type="text" class="form-control mb-3" name="paterno" placeholder="paterno ">
                                    <input type="text" class="form-control mb-3" name="materno" placeholder="materno">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="numero telefonico">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha actual (2023-04-05)">
                                    <input type="text" class="form-control mb-3" name="clave_p" placeholder="clave de compra">
                                    
                                    <input type="submit" class="btn btn-warning">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-warning table-striped" >
                                    <tr>
                                        <th scope="col">clave P</th>
                                        <th scope="col">nombre</th>
                                        <th scope="col">paterno</th>
                                        <th scope="col">materno </th>
                                        <th scope="col">numero telefonico </th>
                                        <th scope="col">direccion </th>
                                        <th scope="col">fecha </th>
                                        <th scope="col">clave de compra </th>
                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['clave_ona']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['paterno']?></th>
                                                <th><?php  echo $row['materno']?></th> 
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['direccion']?></th> 
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['clave_p']?></th>
                                                
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['clave_ona'] ?>" class="btn btn-warning">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['clave_ona'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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