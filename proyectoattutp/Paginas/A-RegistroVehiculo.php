<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" />
  <title>Registro Vehiculo</title>
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
      <br>
    </div>

    <!--parte1-->
    <div class="col-sm-6 col-md-8">
      <div class="container px-4 py-5 h-200" class="shadow p-3 mb-5 bg-white rounded">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10" class="shadow p-3 mb-5 bg-white rounded">
            <div class="card bg-light" style="border-radius: 1rem;" class="shadow p-3 mb-5 bg-white rounded">
              <div class="card-header">
                Registro de Vehículo
              </div>
              <div class="card-body p-6 p-lg-2 text-black" class="shadow p-3 mb-5 bg-white rounded">

                <div class="container register-form">
                  <div class="form">
                    <div class="note">
                      <p>LLenar el Formulario con los datos del nuevo vehículo</p>
                    </div>
                    <div class="form-content">
                      <div class="container text-center">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="formFile" class="form-label">Suba imagen del vehículo</label>
                              <input class="form-control" class="form-control form-control-lg" type="file" id="formFile">
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Modelo</label>
                              <input type="text" required id="modelo" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Marca</label>
                              <input type="text" required id="pasajeros" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Año</label>
                              <input type="number" class="form-control form-control-lg" min="1900" max="2099" step="1" value="2022" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Vin</label>
                              <input type="text" required id="pasajeros" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Placa</label>
                              <input type="text" required id="pasajeros" class="form-control form-control-lg" />
                            </div>

                          </div>


                          <!-- parte 2-->

                          <div class="col">
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Número de Pasajeros</label>
                              <input type="text" required id="pasajeros2" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Numero de Puertas</label>
                              <input type="text" required id="fecha" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Numero del Motor</label>
                              <input type="text" required id="pasajeros" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Marca del Motor</label>
                              <input type="text" required id="pasajeros" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Numero de Revisado</label>
                              <input type="text" required id="pasajeros" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Numero de Poliza</label>
                              <input type="text" required id="pasajeros" class="form-control form-control-lg" />
                            </div>
                          </div>



                          <!-- parte 3-->
                          <div class="col">
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Tipo De Vehiculo</label>
                              <select class="form-control form-control-lg" name="cars" id="cars" required>
                                <option value="Bus">Bus</option>
                                <option value="sedan">Sedan</option>
                                <option value="panel">Panel</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Transmisión</label>
                              <select class="form-control form-control-lg" name="cars" id="cars" required>
                                <option value="manual">Manual</option>
                                <option value="automatica">Automatica</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="form2Example17">Tipo de Combustible</label>
                              <select class="form-control form-control-lg" name="cars" id="cars" required>
                                <option value="diesel">Diesel</option>
                                <option value="gasolina95">Gasolina 95</option>
                                <option value="gasolina91">Gasolina 91</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-label" for="story">Otros</label>
                              <textarea id="info" class="form-control form-control-lg focus-color:#ffffff" name="story" rows="7" cols="60">Descripción..</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="pt-1 mb-3">
                          <center><input type="submit" class="btn Pbotones" value="Enviar" style="background-color: #68086c; color: white;">
                          </center>
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