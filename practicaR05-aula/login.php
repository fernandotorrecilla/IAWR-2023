<?php
session_start();
include_once "conexion.php";
if(isset($_GET["usuario"]) && isset($_GET["password"])){
    $usuario=$_GET["usuario"];
    $password=$_GET["password"];
    try{
        $con=getConexion();
        $sql="SELECT id_usuario FROM usuarios ".
            "WHERE nombre=? AND password=?";
        $st=$con->prepare($sql);
        $st->bind_param("ss",$usuario,$password);
        $st->execute();
        $st->bind_result($id_usuario);
        $st->fetch();
        if($id_usuario){
            $_SESSION["id_usuario"]=$id_usuario;
            $_SESSION["usuario"]=$usuario;
            unset($_SESSION["error"]);
            header("Location:muro.php");
        }
        else{
            $_SESSION["error"]="No se ha encontrado ese usuario con esa contraseña";
            header("Location:index.php");
        }
        $st->close();
        $con->close();
    }
    catch (mysqli_sql_exception $e){
        $_SESSION["error"]=getMensajeError($e->getCode());
        header("Location:index.php");
    }
}
else{
    header("Location:index.php");
}
?>
