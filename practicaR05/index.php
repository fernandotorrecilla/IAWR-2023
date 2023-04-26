<?php
session_start();
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
</head>
<body>
<h1 class="text-center display-3">Acceso de usuarios</h1>
<main class="container">
    <form action="iniciar.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control col-12" placeholder="Escriba su nombre de usuario" required id="usuario"
                   name="usuario">
        </div>
        <div class="form-group">
            <input type="password" class="form-control col-12" placeholder="Escriba su contraseña" required id="pass"
                   name="pass">
        </div>
        <button id="boton" class="btn btn-primary col-12">Entrar</button>
    </form>
    <div class="row">
        <div class="col">
            <?php
            if(isset($_SESSION["error"])){
                echo "<p class='text-danger'>El usuario o contraseña no es correcto</p>";
            }
            ?>
        </div>
    </div>
</main>
</body>
</html>