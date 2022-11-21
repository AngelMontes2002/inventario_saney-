<?php

include("conexion.php");
$con=conectar();

$codigo = $_POST['codi'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descrip'];
$unidades = $_POST['uni'];
$genero = $_POST['genero'];

$sql="UPDATE producto SET  Codigo_pro='$codigo',Nombre_pro='$nombre',Describir='$descripcion', unidad='$unidades' , categoria='$genero' WHERE Codigo_pro='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: http://localhost/Inventario_Saney/ModificarBorrar.php");
    }
?>