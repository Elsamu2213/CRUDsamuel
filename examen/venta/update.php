<?php

include("../config/conexion.php");
$con=conectar();



// definiremos las varibles para poder hacer un update a nuestros datos 
$id=$_POST['clave_p'];
$inicio=$_POST['nombre'];
$dia=$_POST['cantidad'];
$duracion=$_POST['des'];
$total=$_POST['total'];


// haremos la consulta para actualizar los datos guiadonos por el id 
$sql="UPDATE venta SET  h_inicio='$inicio',dia='$dia',duracion='$duracion',total='$total' WHERE clave_p='$id'";
$query=mysqli_query($con,$sql);
//una vez terminado el proceso este se re dirigira a el "index
    if($query){
        Header("Location: venta.php");
    }
?>