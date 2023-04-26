<?php
session_start();
include_once "conexion.php";
if(isset($_SESSION["id_usuario"]) &&
    isset($_GET["id_tarea"])){
    $id_usuario=$_SESSION["id_usuario"];
    $id_tarea=$_GET["id_tarea"];
    $error = 0;
    try {
        $con = getConexion();
        $sql = "DELETE FROM tareas WHERE id_tarea=? ".
               "AND id_usuario=?";
        $st = $con->prepare($sql);
        $st->bind_param("ii", $id_tarea,$id_usuario);
        $st->execute();
        $st->close();
        $con->close();
        header("Location:muro.php");

    } catch (mysqli_sql_exception $e) {
        $_SESSION["error"] = getMensajeError($e->getCode());
    }

}
else{
    header("Location:index.php");
}