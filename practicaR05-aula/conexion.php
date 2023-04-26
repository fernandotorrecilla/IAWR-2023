<?php
//error_reporting(E_ERROR);
$driver=new mysqli_driver();
$driver->report_mode=MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
function getConexion(){
    return new mysqli("localhost","tareas",
        "sgsdf76adfzs%","tareas");
}

function getMensajeError($error){
    if ($error==2002){
        return "No se ha podido conectar al servidor";
    }
    elseif ($error==1045){
        return "No se puede acceder a la base de datos: usuario o contraseña incorrectos";
    }
    elseif($error==1044){
        return "Base de datos no encontrada";
    }
    else{
        return "Error desconocido";
    }
}
?>