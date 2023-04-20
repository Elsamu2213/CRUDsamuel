<?php
include("../config/conexion.php");
$con=conectar();

$id1=$_POST['clave_p']; // declararemos las variables que tendran como valor los datos de la tabla
$inicio2=$_POST['nombre'];
$dia3=$_POST['cantidad'];
$duracion4=$_POST['des'];
$total=$_POST['total'];

// procederemos a hacer la consulta para inserción de datos tomando las varibles para la insercion 
$sql="INSERT INTO venta VALUES('$id1','$inicio2','$dia3','$duracion4','$total')";
$query= mysqli_query($con,$sql);


//abriremos un if para re direccionar al "index" de nuestro php
if($query){
    Header("Location: venta.php");
    
}else {
    echo " <br></br>no se lleno bien ";
}
?>