<?php
session_start();
if(isset($_SESSION["usuario"])){
    $id_usuario=$_SESSION["usuario"];
}
else{
    header("Location:index.php");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        li{
            font-size:1.2em;
        }
    </style>
</head>
<body>
<h1 class="text-center display-3">Lista de tareas</h1>
<main class="container">
    <form action="anadir.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control col-12" placeholder="Escriba una nueva tarea" id="tarea"
                   name="tarea">
        </div>
        <button id="boton" class="btn btn-primary col-12">Añadir</button>
    </form>
    <p>&nbsp;</p>
    <div class="row">
        <div class="col" id="resultado">
        <?php
        $driver=new mysqli_driver();
        $driver->report_mode=MYSQLI_REPORT_OFF;
        $mysqli=new mysqli("localhost","tareas2","tareas2","tareas2");
        if($mysqli->connect_errno==false){
            $sql="SELECT id_tarea,tarea FROM tareas WHERE id_usuario=? ORDER BY tarea";
            $st=$mysqli->prepare($sql);
            $st->bind_param("i",$id_usuario);
            $st->execute();
            $res=$st->get_result();
            if($mysqli->errno==false){
                $fila=$res->fetch_assoc();
                if($fila) {
                    echo "<h2 class='display-5'>Lista</h2>";
                    echo '<ul class="list-group">';
                    while ($fila) {
                        $tarea = $fila["tarea"];
                        $id = $fila["id_tarea"];
                        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>$tarea" .
                            "<a href='borrar.php?id_tarea=$id' class='btn btn-danger btn-sm'>Borrar</a></li>";
                        $fila = $res->fetch_assoc();
                    }
                    echo '</ul>';
                    echo "<p>&nbsp;</p>";
                    echo "<p><a class='btn btn-danger' href='borrarTodas.php'>Borrar Lista</a></p>";
                    echo "<p><a class='btn btn-warning' href='cerrar.php'>Cerrar sesión</a></p>";
                }
                $res->close();
            }
            $mysqli->close();
        }
        ?>
        </div>

    </div>
</main>
</body>
</html>