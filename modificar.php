<?php

require "Conexion.php";

$manejador = new Conexion();
$info      = $_GET['info'];

$info      = json_decode($info);
$id        = $info->id;
$nombre    = $manejador->quote($info->nombre);


$resultado = $manejador->query("UPDATE productos SET nombre_producto = $nombre WHERE id = $id");

echo "OK";

?>