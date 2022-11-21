<?php

include("conexion.php");
$con=conectar();

$codigo=$_GET['codi'];

$sql="DELETE FROM producto  WHERE Codigo_pro= 6";
$query=mysqli_query($con,$sql);

    if($query){
        echo'<script>
        alert("Dato Eliminado");
        window.location.href="ModificarBorrar.php";
        </script>';
    }else{
        echo'<script>
        alert("Dato no eliminado");
        window.location.href="ModificarBorrar.php";
        </script>';
    }
?>