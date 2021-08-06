<?php 

    define ('SERVIDOR', 'localhost');
    define ('USUARIO', 'root');
    define ('CLAVE', '');
    define ('BDD', 'mydb');

    $conexion = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BDD) or die ("Error de conexion");
?>