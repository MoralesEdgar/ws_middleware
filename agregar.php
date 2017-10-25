<?php

require "Conexion.php";

$manejador = new Conexion();
$nombre    = $manejador->quote($_GET['nombre']);

// Consulta para hacer el insert en la BD
$resultado = $manejador->query("INSERT INTO productos(nombre_producto) VALUES ($nombre)");

if($resultado !== NULL && sizeof($resultado) > 0 ){
    $resClass = new \stdClass();
    $resClass->resultado = TRUE;

    echo json_encode($resClass);

}else{
    header("HTTP/1.1 500 Internal Server Error");
}

?>