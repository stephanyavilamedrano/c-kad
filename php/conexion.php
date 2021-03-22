<?php 
    $servidor="MYSQL5037.site4now.net";
    $nombreBd="db_a71862_ckad";
    $usuario="a71862_ckad";
    $pass="2105SamNegro";
    $conexion = new mysqli($servidor, $usuario, $pass, $nombreBd);
    if($conexion -> connect_error ){
        die("No se pudo establecer la conexión con el servidor");
    }

?>