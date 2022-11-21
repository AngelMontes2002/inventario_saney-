<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<header>

   <div class="header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
               <div class="full">
                  <div class="logo">
                     <a href="inicioLo.php">
                     <img src="images/logo2.png" width="70px" height="50px"/>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<body>
<br>
<form action="update.php" method="POST">
                    <input type="number" class="form-control mb-3" name="codi" placeholder="Codigo" required>
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required>
                    <input type="text" class="form-control mb-3" name="descrip" placeholder="Descripcion" require>
                    <input type="number" class="form-control mb-3" name="uni" placeholder="Cantidad"   required>
                    <p>Categoria</p>
                <select name="genero" class="form-control mb-3" >
                     <option>Casa</option>
                     <option>Canasta Familiar</option>
                     <option>bebida</option>
                     <option>tecnologia</option>
                  </select><br>
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </form>

</body>
</html>
