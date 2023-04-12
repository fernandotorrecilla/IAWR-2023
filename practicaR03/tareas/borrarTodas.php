<?php
setcookie("tareas",false,time()-1);
header("Location:listar.php");
?>