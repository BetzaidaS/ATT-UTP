<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" />
  <title>Perfil conductor</title>
  <!-- logo-->
  <link rel="icon" type="image/x-icon" href="../img/tropical_utp_logo-modified.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="../Css/estilo.css" rel="stylesheet">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header>
    <div>
      <nav class="navbar navbar-light py-0 padding-top:0">
        <a class="navbar-brand" href="#">
          <img src="../img/tropical_utp_logo.jpg" class="img-circle" width="100" height="100" class="d-inline-block align-top" alt="">
          Universidad Tecnológica de Panamá</a>
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="#">Cerrar Sesion</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#68086c;" class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <a class="navbar-brand py-0" href="#">Perfil del Conductor</a>
      <ul class="menu">
        <li class="nav-item"><a class="nav-menu-link nav-link nav-menu-link_active" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Solicitud</a></li>
        <li class="nav-item"><a class="nav-link" href="">Estado De Solicitud</a></li>
      </ul>
    </nav>
  </header>

  <div class="py-4" style="background-color:#ffffff" id="">
    <br>
    <div class="container">
      <div>
        <center>
          <h2 style="color:#68086c">Perfil del conductor</h2>
        </center>
        <br>

        <div class="row ">
          <div class="col-3">
            <img src="https://castillotrans.eu/wp-content/uploads/2019/06/77461806-icono-de-usuario-hombre-hombre-avatar-avatar-pictograma-pictograma-vector-ilustraci%C3%B3n.jpg" alt="" width="200px">
          </div>
          <div>
            <br><br>
            <h2 style="color: #000000">Nombre conductor</h2><br>
            <h3 style="color: #000000">XX-XXXX-XXXXXX</h3>
          </div>

        </div>

        <br><br>

        <div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #68086c; color: #ffffff;">Correo
                Electrónico</span>
            </div>
            <input type="text" class="form-control">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #68086c; color: #ffffff;">Teléfono Móvil</span>
            </div>
            <input type="text" class="form-control">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #68086c; color: #ffffff;">Viajes Realizados</span>
            </div>
            <input type="text" class="form-control">
          </div>
        </div>
        <br>
      </div>
    </div>

    <footer>
      <?php
      require_once('../complementos/fotter.php');
      ?>
    </footer>
</body>

</html>