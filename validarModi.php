<?php
    $codigo = $_POST['codi'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descrip'];
    $unidades = $_POST['uni'];
    $genero = $_POST['genero'];
    session_start();

    $conectar=mysqli_connect('localhost','root','','inventario_saney');

    $sql = "INSERT INTO producto (Codigo_pro,Nombre_pro,Describir,unidad,categoria) VALUES ( '$codigo','$nombre','$descripcion', '$unidades', '$genero')";
    $ejecutar=mysqli_query($conectar,$sql);

    if($ejecutar){
        echo'<script>
        alert("Dato Guardado");
        window.location.href="ModificarBorrar.php";
        </script>';

    }else{
        ?>
        <?php
        $var="Datos no ingresados!!!";
        echo "<script>alert('$var');window.history.back();</script>";
        ?>
        <?php
    }
mysqli_free_result($ejecutar);
mysqli_close($conectar);
?>