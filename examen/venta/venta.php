<?php 
    include("../config/conexion.php");
    
    
    
    //usaremos el la palabra include con la direccion de nuestra carpeta config
    $con=conectar();  //usaremos el metodo conectar y lo usaremos en la variable $con 

    $sql="SELECT * FROM venta"; 

    // mandaremos una consulta donde muestre la tabla franja
    $query=mysqli_query($con,$sql);// los cuerry mandaran la consulta con la conexion 

    $row=mysqli_fetch_array($query);// mostrara  la consulta que se inserto en el query 

    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title> venta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 class="text-muted"> ingrese datos de venta</h1>
                                <form action="insertar.php"   method="POST">
                                    <!-- crearemos los input tex para  ingrsar los datos para latabla y mostraremos el nombre de los atributos que se tienen que llenar-->

                                    <input type="text" class="form-control mb-3" name="clave_p" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre del producto">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                                    <input type="text" class="form-control mb-3" name="des" placeholder="descripcion">
                                    <input type="text" class="form-control mb-3" name="total" placeholder="total">

                                    




                                    <!--colocaremos un boton para enviar la informacion del formulario llenado-->
                                    <input type="submit" class="btn btn-dark">
                                </form>
                        </div>
                            <!--crearemos latabla donde se mostraran los datos -->
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-secondary table-striped" >
                                    <tr> <!--colocaremos las etiquetas de nuestra tabla-->
                                        <th scope="col">id</th>
                                        <th scope="col">nombre</th>
                                        <th scope="col">cantidad</th>
                                        <th scope="col">descripcion </th>
                                        <th scope="col">total </th>
                                        <th scope="col">t</th>


                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php //cuando mande el query entonces mandara el dato de nuestros atributos 
                                            while($row=mysqli_fetch_array($query)){
                                        ?>

                                        <?php
                                        include("operacion.php");

                                        ?>
                                            <tr>
                                                <th><?php  echo $row['clave_p']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['des']?></th>  
                                                <th><?php  echo $row['total']?></th>  

                                                <th><?php  echo $operacion?></th>  
                                                
                                                <!-- en estos dos colocaremos lo botones que nos mandara a la  a la accion de boorar y actualizar -->
                                                <th><a href="actualizar.php?id=<?php echo $row['clave_p'] ?>" class="btn btn-secondary">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['clave_p'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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