<h1>Lista de Platos</h1>

<?php

//Conexion con base de datos
require './database/db_conect.php';
$mysqli = conectar();

//Consulta BBDD
$resultado = $mysqli->query("SELECT id, titulo FROM plato");

//Imprime resultado
echo '<ol>';
while($reg=$resultado->fetch_assoc()){
    echo '<li>';
    echo '<a href="http://localhost/dev/RETO02/detalle.php?id='.$reg['id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a>';
    echo '</li>';
}
echo '</ol>';

?>