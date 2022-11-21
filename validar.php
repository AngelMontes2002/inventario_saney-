<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;

    $conectar=mysqli_connect('localhost','root','','inventario_saney');

    $consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and password='$contraseña'";
    $resultado=mysqli_query($conectar,$consulta);

    $fila=mysqli_num_rows($resultado);
    if($fila){
        echo "<script>alert('Bienvenido')</script>";
        header("location: inicioLo.php");

    }else{
        ?>
        <?php
        include("login.php");
        ?>
    echo "<script>alert('Error en autenticacion')</script>";
        <?php
    }
mysqli_free_result($resultado);
mysqli_close($conectar);
?>