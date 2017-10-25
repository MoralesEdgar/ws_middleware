<?php

require "Conexion.php";

$manejador = new Conexion();
$resultado = $manejador->select("SELECT * FROM productos");


echo json_encode($resultado);

?>