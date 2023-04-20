<?php 
    include("../config/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM producto";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> producto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 class="text-muted"> ingrese datos del producto</h1>
                                <form action="insertar.php" method="POST">

                                        <!-- aqui va el texto de el formulario de input 
                                        ---name que esta en la base de datos y place holder es donde se vera en las barras de imput-->

                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nombre_p" placeholder="producto">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad ">
                                    <input type="text" class="form-control mb-3" name="des" placeholder="descripcion">
                                    <input type="text" class="form-control mb-3" name="preci" placeholder="precio">
                                    

                                    

                                    
                                    <input type="submit" class="btn btn-dark">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-secondary table-striped" >
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">producto</th>
                                        <th scope="col">cantidad</th>
                                        <th scope="col"> descripcion </th>
                                        <th scope= "col">precio   </th>
                                        
                                        
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <!--aqui se muestra los datos para llenar la tabla  los datos despues de row se toman de los nombres del atributo -->
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre_p']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['des']?></th> 
                                                <th><?php  echo $row['precio']?></th> 
                                                
                                                
                                                
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">Editar</a></th>
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