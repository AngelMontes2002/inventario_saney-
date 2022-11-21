<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    session_start();

    $conectar=mysqli_connect('localhost','root','','inventario_saney');

    $sql = "INSERT INTO usuarios (usuario, password, nombre, apellido) VALUES ( '$usuario','$contraseña','$nombre', '$apellido')";
    $ejecutar=mysqli_query($conectar,$sql);

    if($ejecutar){
        echo "<script>alert('Bienvenido')</script>";
        header("Location: http://localhost/inventario_saney/login.php");;

    }else{
        ?>
        <?php
        include("registro.php");
        ?>
      echo "<script>alert('Error en autenticacion')</script>";
        <?php
    }
mysqli_free_result($ejecutar);
mysqli_close($conectar);
?>