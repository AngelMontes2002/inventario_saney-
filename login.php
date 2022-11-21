<!DOCTYPE html>
<html lang="es">
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">

   <title>Login</title>
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
<header>

   <div class="header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
               <div class="full">
                  <div class="logo">
                     <a href="index.php"><img src="images/logo2.png" width="70px" height="50px" /></a>
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
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contacto.php">Contactos</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="login.php"><span class="yellow">Login</span></a>
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
   <form action="validar.php" method="POST" style="text-align: center ; margin: 8% 20px;">
      <h1 class="h1" style="color: black;">Iniciar Sesion</h1>
      <p>Usuario</p><input type="text" placeholder="Ingrese su usuario" name="usuario">
      <p>password</p><input type="password" placeholder="Ingrese su contarseña" name="contraseña"><br><br>
      <input type="submit" class="btn btn-success" value="Ingresar" name="btningresar">
      <a href="registro.php">¿quieres registrarte?</a>
   </form>
</body>

</html>