<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" />
  <title>Solicitud</title>
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
      <a class="navbar-brand py-0" href="#">Servicio de Solicitud de Vehiculos</a>
      <ul class="menu">
        <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-menu-link nav-link nav-menu-link_active" href="#">Solicitud</a></li>
        <li class="nav-item"><a class="nav-link" href="">Estado De Solicitud</a></li>
      </ul>
      </div>
    </nav>
  </header>

  <!--izquierda-->
  <div class="row g-0 text-center">
    <div class="col-sm-6 col-md-2">
    </div>

    <!--Centro-->
    <div class="col-sm-6 col-md-8">
      <div class="container py-4 h-150" class="shadow2">

        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card bg-light" style="border-radius: 1rem;">
              <div class="card-header">
                Solicitud
              </div>
              <div class="card-body p-6 p-lg-2 text-black">

                <div class="container register-form">
                  <div class="form">
                    <div class="note">
                      <p>LLenar el Formulario de Solicitud de Vehiculo.</p>
                    </div>
                    <div class="form-content">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label" for="form2Example17">Destino</label>
                            <input type="text" required id="destino" class="form-control form-control-lg" />
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="form2Example17">Fecha</label>
                            <input type="date" required id="fecha" class="form-control form-control-lg" />
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="form2Example17">Cantidad de Personas</label>
                            <input type="text" required id="pasajeros" class="form-control form-control-lg" />
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="story">Indicaciones</label>
                            <textarea id="info" class="form-control form-control-lg" name="story" rows="5" cols="43">Indicaciones, Descripción del viaje...</textarea>
                          </div>
                        </div>
                        <!-- Mitad-->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label" for="form2Example17">Tipo De Vehiculo</label>
                            <select class="form-control form-control-lg" name="cars" id="cars" required>
                              <option value="volvo">Bus</option>
                              <option value="saab">Sedan</option>
                              <option value="opel">Panel</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="form2Example17">Hora de salida</label>
                            <input type="time" id="horasalida" class="form-control form-control-lg" name="horaS" min="06:00" max="18:00" required>
                            <small>Horario de Trabajo de 6:00 am a 6:00 pm</small>
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="form2Example17">Hora de Regreso</label>
                            <input type="time" class="form-control form-control-lg" id="horaR" name="appt" min="06:00" max="18:00" required>
                            <small>si su viaje se encuentra fuera de las horas laborales por favor solicitar salvo
                              conducto</small>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" id="salvo Conducto" name="salvoC" value="salvo">
                            <label class="form-label">Solicitar Salvo Conducto</label><br>
                          </div>
                        </div>
                      </div>
                      <div class="pt-1 mb-3">
                        <center><input type="submit" class="btn Pbotones" value="Enviar" style="background-color: #68086c; color: white;"></center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Derecha -->
    <div class="col-6 col-md-2">
    </div>
  </div>
  </div>
  </div>
  </div>

  <footer>
    <?php
    require_once('../complementos/fotter.php');
    ?>
  </footer>
</body>

</html>