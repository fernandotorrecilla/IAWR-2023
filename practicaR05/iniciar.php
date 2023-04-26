<?php
session_start();
print_r($_POST);
$destino="index.php";
if(isset($_POST["usuario"]) && isset($_POST["pass"])){
    $nombre=$_POST["usuario"];
    $pass=$_POST["pass"];
    $driver=new mysqli_driver();
    $driver->report_mode=MYSQLI_REPORT_OFF;

    $mysqli=new mysqli("localhost","tareas2","tareas2","tareas2");
    if($mysqli->connect_errno==false) {
        $sql="SELECT id_usuario FROM usuarios WHERE nombre=? and pass=?";
        $st = $mysqli->prepare($sql);
        $st->bind_param("ss",$nombre,$pass);
        $st->execute();
        $res=$st->get_result();
        if($mysqli->errno==false) {
            $fila=$res->fetch_assoc();
            if($fila){
                $_SESSION["usuario"]=$fila["id_usuario"];
                $destino="tareas.php";
            }
            else{
                $_SESSION["error"]=1;
            }
            $res->close();
        }
        $mysqli->close();
    }
}
header("Location:$destino");

?>