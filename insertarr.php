<?php
if(isset($_POST['insert'])){
   $conectar=mysqli_connect('localhost','root','','inventario_saney');
   
   $codigo=$_POST['codi'];
   $nombre=$_POST['nombre'];
   $descripcion=$_POST['descrip'];
   $unidad=$_POST['uni'];
   
   
   $insertar="INSERT INTO producto values(Codigo_pro,Nombre_pro,Describir,unidad) VALUES('$codigo','$nombre','$descripcion','$unidad')";
   $ejecutar=mysqli_query($conectar,$insertar);
   
   if($ejecutar){
      echo "<br>";
      echo "<center><h2> Registro Insertado </h2></center>";
       
   }
   }
?>