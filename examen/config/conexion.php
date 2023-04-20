<?php // colocaremos este simbolo para abrir el php

function conectar(){  // meteremos nuestro codigo en un function para poder hacer uso de la función
  $host="localhost"; // pondremos en varibles el nombre de nuestro host en este caso local host
  $user="root";  //el nombre de usuario 
  $pass="";   // y entre comillas pondremos la contraseña de nuestro mysql , en este caso no tiene

  $bd="exa"; // aqui colocaremos el nombre de nuestra base de datos en este caso publici

  $con=mysqli_connect($host,$user,$pass); //crearemos una varible la cual mandara los datos de nuestras variables 

  mysqli_select_db($con,$bd);// tanto la varable $con como la variable $bd para poder conectar la base de datos 

  if ($con) { // usaremos un if para saber el estado de nuestra connecion dependiendo de la variable con 
    echo"se conecto";
  }else {
    echo"no conecto";
  }

  return $con;// retornaremos la variable 

}


?>
