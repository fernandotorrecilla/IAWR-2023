<?php
include_once "conexion.php";
if(isset($_GET["id"])){
    $id=$_GET["id"];
    try{
        $con=getConexion();
        $sql="DELETE FROM reflexiones WHERE id_reflexion=?";
        $st=$con->prepare($sql);
        $st->bind_param("i",$id);
        $st->execute();
        $st->close();
        $con->close();
    }
    catch(mysqli_sql_exception $e){
        $error=getMensajeError($e->getCode());
    }

}
header("Location: lista.php");

?>