<?php
error_reporting(E_ERROR);
$driver=new mysqli_driver();
$driver->report_mode=MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;

function getConexion(){
    $con=new mysqli("localhost","palabras",
        "asdgjadshjasd&asd54asd","palabras");
    return $con;
}

function mensajeError($codigo){
    if($codigo==2002)
        return "Ha fallado la conexión a la base de datos";
    else if($codigo==1045)
        return "Usuario o contraseña incorrecto";
    else if($codigo==1044)
        return "No se pudo abrir la base de datos";
    else
        return "Error desconocido";
}
?>