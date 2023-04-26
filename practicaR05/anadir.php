<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $id_usuario = $_SESSION["usuario"];
}
else {
    header("Location:index.php");
}
if(isset($_POST["tarea"])){
    $driver=new mysqli_driver();
    $driver->report_mode=MYSQLI_REPORT_OFF;
    $mysqli=new mysqli("localhost","tareas2","tareas2","tareas2");
    if($mysqli->connect_errno==false) {
        $st = $mysqli->prepare("INSERT INTO tareas(tarea,id_usuario) VALUES(?,?)");
        //echo "INSERT INTO tareas(tarea,id_usuario) VALUES('".$_POST["tarea"]."',$id_usuario)";
        if($st) {
            $st->bind_param("si", $_POST["tarea"],$id_usuario);
            $st->execute();
            $st->close();
        }
        $mysqli->close();
    }
}
header("Location:tareas.php");

?>