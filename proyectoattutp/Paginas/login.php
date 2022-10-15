<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" />
  <title>login</title>
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
          <a class="nav-item nav-link" href="#">Entrar</a>
        </div>
    </div>
    <center>
      <div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#68086c;" class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

          <a class="navbar-brand justify-content-center py-0 px-5" href="#">Servicio de Solicitud de Vehiculos</a>

      </div>
    </center>
    </nav>
  </header>

  <section class="vh-50" style="background-color: #ffffff;">
    <div class="container py-4 h-150">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card bg-light " style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="../img/login.gif" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h5>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Correo Electronico</label>
                      <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4 ">
                      <label class="form-label" for="form2Example27">Contraseña</label>
                      <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    </div>

                    <div class="pt-1 mb-4">
                      <center><input type="submit" class="btn Pbotones" value="Entrar" style="background-color: #68086c; color: white;"></center>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer>
    <?php
    require_once('../complementos/fotter.php');
    ?>
  </footer>
</body>

</html>