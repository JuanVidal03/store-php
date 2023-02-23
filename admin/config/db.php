<?php 

// datos para la conexion DB
$host = "localhost";
$db = "php-store";
$user = "root";
$pass = "";


try {
    // crea una conexion a la base de datos
    $conexion = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    // verificando si la conexion fue correcta
    // if ($conexion) { echo 'DB conectada exitosamente!'; }

} catch (Exception $ex) {
    // en caso de error muestra un mensaje
    echo 'Error '.$ex -> getMessage();
}


?>