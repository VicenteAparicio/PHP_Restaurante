<?php

echo '<h1>Detalle de ' . ($_GET["titulo"]) . '</h1>';

//Conexion con base de datos
require './database/db_conect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);
$reg=$resultado->fetch_assoc();

echo '<ul>';
echo '<li>Identificador: '.$reg['id'].'</li>';
echo '<li>Nombre del plato: '.$reg['titulo'].'</li>';
echo '<li>Numero de comensales: '.$reg['comensales'].'</li>';
echo '<li>Tipo de plato: '.$reg['tipo'].'</li>';
echo '</ul>';

?>