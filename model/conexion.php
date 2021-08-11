<?php 

    define ('SERVIDOR', 'localhost');
    define ('USUARIO', 'root');
    define ('CLAVE', '');
    define ('BDD', 'alquiler_bd');

    $conexion = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BDD) or die ("Error de conexion");
?>