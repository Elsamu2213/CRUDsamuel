<?php
include("../config/conexion.php");
$con=conectar();


$inicio2=$_POST['nombre'];
$dia3=$_POST['cantidad'];
                                        
                                        
// haremos la consulta para actualizar los datos guiadonos por el id 

//este codigo da el precio del producto
    $sqlpro="SELECT precio FROM `producto`WHERE nombre_p ='$inicio2'";

    //$sqlcan=" SELECT cantidad FROM `venta`WHERE cantidad ='$cantida'";
    $operacion= $sqlpro*$dia3;

    $query=mysqli_query($con,$sqlpro
);
//una vez terminado el proceso este se re dirigira a el "index
    if($query){
        Header("Location: venta.php");
    }
?>

?>
