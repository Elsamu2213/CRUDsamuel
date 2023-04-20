<?php

include("../config/conexion.php");
$con=conectar();




$id=$_POST['clave_ona'];
$inicio=$_POST['nombre'];
$dia=$_POST['paterno'];
$duracion=$_POST['materno'];
$tel=$_POST['telefono'];
$di=$_POST['direccion'];
$fecha=$_POST['fecha'];
$cpro=$_POST['clave_p'];




$sql="UPDATE persona SET  nombre='$inicio',paterno='$dia',materno='$duracion',telefono='$tel',direccion='$di',fecha='$fecha',cpro='$cpro' WHERE clave_ona='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: persona.php");
    }
?>