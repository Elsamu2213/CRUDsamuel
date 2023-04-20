<?php

include("../config/conexion.php");
$con=conectar();

$id_franja=$_GET['id'];

$sql="DELETE FROM producto  WHERE id='$id_franja'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
