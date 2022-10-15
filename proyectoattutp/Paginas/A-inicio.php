<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" />
  <title>Inicio del administrador</title>
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
      <a class="navbar-brand py-0" href="#">Inicio del Administrador</a>
      <ul class="menu">
        <li class="nav-item"><a class="nav-menu-link nav-link nav-menu-link_active" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="solicitudesA.php">Solicitudes</a></li>
        <li class="nav-item"><a class="nav-link" href="historialViaje.html">Historial</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Viajes en Curso</a></li>
        <li class="nav-item"><a class="nav-link" href="inventarioV.php">Vehículos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Reportes</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Conductores</a></li>
        <li class="nav-item"><a class="nav-link" href="ARegistroVehiculo.html">Registro de Vehículo</a></li>
      </ul>
    </nav>
  </header>


  <center>
    <div class="py-4" style="background-color:#ffffff" id="">
      <div class="container">
        <br>
        <br>
        <div class="card" style="width: 70rem; border-color: #68086c;">
          <div class="card-header" style="background-color: #68086c; color: white;">
            <h5> Solicitudes de Salvo Conducto</h5>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Conductor</th>
                  <th scope="col">Motivo</th>
                  <th scope="col">Estado</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">001</th>
                  <td>Mark Otto</td>
                  <td>El evento se extendió</td>
                  <td>
                    <button type="button" class="btn btn-success">Aprobar</button>
                    <button type="button" class="btn btn-danger">Rechazar</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">002</th>
                  <td>Jacob Thornton</td>
                  <td>El tráfico no se mueve</td>
                  <td>
                    <button type="button" class="btn btn-success">Aprobar</button>
                    <button type="button" class="btn btn-danger">Rechazar</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <br><br>
        <div class="card" style="width: 70rem; border-color: #68086c;">
          <div class="card-header" style="background-color: #68086c; color: white;">
            <h5> Solicitudes de Viajes</h5>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Solicitante</th>
                  <th scope="col">Motivo</th>
                  <th scope="col"># de personas</th>
                  <th scope="col"># de vehículos</th>
                  <th scope="col">Estado</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="cow">000001</th>
                  <td>Miguel Rodríguez</td>
                  <td>Para formación de los estudiantes</td>
                  <td>12</td>
                  <td>1 vehículo de 15 pasajeros</td>
                  <td>
                    <button type="button" class="btn btn-success">Aprobar</button>
                    <button type="button" class="btn btn-danger">Rechazar</button>
                  </td>
                </tr>
                <tr>
                  <th scope="cow">000002</th>
                  <td>Ana Castillo</td>
                  <td>Para representar a la universidad</td>
                  <td>1</td>
                  <td>1 vehículo de 4 pasajeros</td>
                  <td>
                    <button type="button" class="btn btn-success">Aprobar</button>
                    <button type="button" class="btn btn-danger">Rechazar</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <br><br>
        <div class="card" style="width: 70rem; border-color: #68086c;">
          <div class="card-header" style="background-color: #68086c; color: white;">
            <h5>Reportes</h5>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Conductor</th>
                  <th scope="col">Motivo</th>
                  <th scope="col">Detalles</th>
                  <th scope="col">Foto</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">001</th>
                  <td>Mark Otto</td>
                  <td>Colisión con otro vehículo</td>
                  <td>Mientras pasaba una intersección y el otro vehículo no realizó el alto</td>
                  <td>
                    <button type="button" class="btn btn-primary">Mirar</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <br><br>
      </div>
  </center>


  <footer>
    <?php
    require_once('../complementos/fotter.php');
    ?>
  </footer>
</body>

</html>