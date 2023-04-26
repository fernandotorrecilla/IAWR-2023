<?php
session_start();
include_once "conexion.php";
if(isset($_SESSION["id_usuario"]) &&
    isset($_GET["tarea"]) && isset($_GET["prioridad"])){
    $id_usuario=$_SESSION["id_usuario"];
    $tarea=trim($_GET["tarea"]);
    $prioridad=$_GET["prioridad"];
    if(strlen($tarea)==0){
        $_SESSION["error"]="La tarea tiene que trener texto";
        header("Location:muro.php");
    }
    elseif($prioridad!=1 && $prioridad!=2 && $prioridad!=3){
        $_SESSION["error"]="Solo son válidas prioridades alta, media y baja";
        header("Location:muro.php");
    }
    else {
        $error = 0;
        try {
            $con = getConexion();
            $sql = "insert into tareas(titulo, id_usuario, prioridad) " .
                "VALUES(?,?,?)";
            $st = $con->prepare($sql);
            $st->bind_param("sii", $tarea, $id_usuario,$prioridad);
            $st->execute();
            $st->close();
            $con->close();
            header("Location:muro.php");

        } catch (mysqli_sql_exception $e) {
            $_SESSION["error"] = getMensajeError($e->getCode());
        }
    }

}
else{
    header("Location:index.php");
}