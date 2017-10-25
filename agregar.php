<?php

require "Conexion.php";

$manejador = new Conexion();
$nombre    = $manejador->quotes($_GET['nombre']);

$resultado = $manejador->query('SELECT INTO productos VALUES(NULL, $nombre)');

if($resultado !== NULL || sizeof($resultado) > 0 ){
    $resClass = new \stdClass();
    $resClass->resultado = TRUE;

    echo json_encode($resClass);

}else{
    header("HTTP/1.1 500 Internal Server Error");
}

?>