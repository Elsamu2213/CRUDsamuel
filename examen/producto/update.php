<?php

include("../config/conexion.php");
$con=conectar();




$id=$_POST['id'];
$inicio=$_POST['nombre_p'];
$dia=$_POST['cantidad'];
$duracion=$_POST['des'];
$director=$_POST['precio'];



$sql="UPDATE producto SET  nombre_p='$inicio',cantidad='$dia',des='$duracion',precio='$director' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>