<?php
include("../config/conexion.php");
$con=conectar();

// los datos de post son el nombre del name que se le asigno a de donde se ingresan los datos 

$id=$_POST['id'];
$inicio=$_POST['nombre_p'];
$dia=$_POST['cantidad'];
$duracion=$_POST['des'];
$director=$_POST['preci'];



$sql="INSERT INTO producto VALUES('$id','$inicio','$dia','$duracion','$director')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
}
?>