<?php
include("../config/conexion.php");
$con=conectar();

$id=$_POST['clave_ona'];
$inicio=$_POST['nombre'];
$dia=$_POST['paterno'];
$duracion=$_POST['materno'];
$tel=$_POST['telefono'];
$di=$_POST['direccion'];
$date=$_POST['fecha'];
$clap=$_POST['clave_p'];




$sql="INSERT INTO persona VALUES('$id','$inicio','$dia','$duracion','$tel','$di','$date','$clap')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: persona.php");
    
}else {
}
?>