<?php
include("conexion.php");
$con=conectar();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <title>Modificar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body class="main-layout">



    <header>

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <div class="full">
                            <div class="logo">
                                <a href="#">
                                    <h1 style="color: white; padding: 5px 150px;">Bienvenido</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                        <nav class="navigation navbar navbar-expand-md navbar-dark " style="padding: 0 250px;">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="inicioLo.php">Administrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="crearPro.php">Crear Productos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admincontra.php">Modificar y Borrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="verProductos.php">Ver Productos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cerrar_sesion.php"><span class="yellow">Cerrar sesion</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <body>
        <div class="container" style="margin: -10px ;">
            <div class="row p-2">
                <div class="col-3">
                    <form action="validarModi.php" method="POST" ">
                    <input type=" number" class="form-control mb-3" name="codi" placeholder="Codigo" required>
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required>
                        <input type="text" class="form-control mb-3" name="descrip" placeholder="Descripcion">
                        <input type="number" class="form-control mb-3" name="uni" placeholder="Cantidad" required>
                        <p>Categoria</p>
                        <select name="genero" class="form-control mb-3">
                            <option>Casa</option>
                            <option>Canasta Familiar</option>
                            <option>bebida</option>
                            <option>tecnologia</option>
                        </select><br>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </form>
                </div>
            </div>
        </div>
        <div class="container" style=" margin: -350px 50px;">
            <div class="row p-2">
                <div class="col-3">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Codigo</th>
                                <th>Nombres</th>
                                <th>Descripcion</th>
                                <th>unidades</th>
                                <th>categoria</th>
                                <th></th>

                            </tr>
                            <?php
                            $conectar = mysqli_connect('localhost', 'root', '', 'inventario_saney');
                            $consulta = "select * from producto";
                            $ejecutar = mysqli_query($conectar, $consulta);

                            $i = 0;

                            while ($fila = mysqli_fetch_array($ejecutar)) {

                                $codigo = $fila['Codigo_pro'];
                                $nombre = $fila['Nombre_pro'];
                                $descripcion = $fila['Describir'];
                                $unidad = $fila['unidad'];
                                $genero = $fila['categoria'];

                                $i++;

                            ?>
                        </thead>
                        <tbody>
                            <tr>
                                <th><?php echo $codigo ?></th>
                                <th><?php echo $nombre ?></th>
                                <th><?php echo $descripcion ?></th>
                                <th><?php echo $unidad ?></th>
                                <th><?php echo $genero ?></th>
                                <th><a href="editar.php" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i> Editar</a></th>
                                <th><a href="ModificarBorrar.php?borrar=<?php echo $codigo;?>" class="btn btn-danger">Eliminar</a></th>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
<!-- borrar-->
                <?php

                if (isset($_GET['borrar'])) {

                    $borrar_id = $_GET['borrar'];

                    $borrar = "DELETE FROM producto WHERE Codigo_pro='$borrar_id'";

                    $ejecutar = mysqli_query($con, $borrar);

                    if ($ejecutar) {

                        echo "<script>alert('Usuario Borrado')</script>";
                        echo "<script>windown.open('ModificarBorrar.php','_self)</script>";
                    }
                }

                ?>
                <!-- EDITAR-->

                <?php

                if (isset($_GET['editar'])) {


                    include("acciones/editar.php");
                }

                ?>


    </body>

</html>