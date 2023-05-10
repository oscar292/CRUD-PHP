<?php
function conectar()
{
    $conexion = pg_connect("host=localhost port=5432 dbname=php user=postgres password=123456");
    if (!$conexion) {
        die("Error de conexión: ");
    }

    return $conexion;
}