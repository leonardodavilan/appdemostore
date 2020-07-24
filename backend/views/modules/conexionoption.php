<?php
function conectar()
{
    $servidor = "localhost";
    $usuario  = "root";
    $password = "";
    $bd       = "tienda_demo";
    $cnn      = new mysqli($servidor, $usuario, $password, $bd);
    return $cnn;
}
