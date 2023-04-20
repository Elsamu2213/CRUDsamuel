<?php

include("../config/conexion.php");
$con=conectar();

//indicaremos la variable para que resiva la variable resiva elnombre del id
$id_franja=$_GET['id']; 
//haremos la consulta donde los id  selecionados ceran eliminados 
$sql="DELETE FROM venta  WHERE clave_p='$id_franja'";
$query=mysqli_query($con,$sql);
//redirigiremos al "index"
    if($query){
        Header("Location: venta.php");
    }
?>
