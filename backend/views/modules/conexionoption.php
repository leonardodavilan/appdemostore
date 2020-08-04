<?php
function conectar()
{
    $servidor = "qf5dic2wzyjf1x5x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $usuario  = "t93vsxhvr61swckp";
    $password = "cdhjx6y1heo107gx";
    $bd       = "h4mm55t2l7sh5f9v";
    $cnn      = new mysqli($servidor, $usuario, $password, $bd);
    return $cnn;

    // $servidor = "localhost";
    // $usuario  = "root";
    // $password = "";
    // $bd       = "importacionesstyle_db";
    // $cnn      = new mysqli($servidor, $usuario, $password, $bd);
    // return $cnn;
}
