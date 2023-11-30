<?php
//configura la conexion del db(base de datos)
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "tienda_online";

$conexion = new mysqli($servidor,$usuario,$clave,$dbname);

//verificar conexion

if ($conexion->connect_error) {
    die("conexión fallida".$conexion->connect_error);
  
  } else {
 
     echo " ";
 }

 $sql = "";

 ?>