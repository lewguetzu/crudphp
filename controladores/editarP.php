<?php

include "../clases/conexion.php";
include "../clases/producto.php";

$objConexion = new conexion();
$objProducto = new producto();

$Conexion = $objConexion->conectar();
echo $objProducto->editar($Conexion, $_POST['id'], $_POST['nombre'], $_POST['valor'], 
$_POST['cantidad'], $_POST['categoria']);

echo "<br><a href='../menu.html'><button>Volver Al menu</button></a>";
echo "<br><a href='../index.html'><button>Volver Al inicio</button></a>";