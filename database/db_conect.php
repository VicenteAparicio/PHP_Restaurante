<<?php 

function conectar(){
//Conexion con base de datos
$mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306", "b96318f23e748b","1986b5e1", "heroku_c51d9cb7494b9ba");
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

return $mysqli;

}

?>