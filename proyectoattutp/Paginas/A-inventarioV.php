<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" />
  <title>navegacion</title>
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
        <li class="nav-item"><a class="nav-link" href="principalAdmistrador.html">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="solicitudesA.php">Solicitudes</a></li>
        <li class="nav-item"><a class="nav-link" href="historialViaje.html">Historial</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Viajes en Curso</a></li>
        <li class="nav-item"><a class="nav-menu-link nav-link nav-menu-link_active" href="">Vehículos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Reportes</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Conductores</a></li>
        <li class="nav-item"><a class="nav-link" href="ARegistroVehiculo.html">Registro de Vehículos</a></li>
      </ul>
      </div>
    </nav>
  </header>
  <div class="content">
    <div class="container">
      <div class="center">
        <h3>Inventario de Vehículos</h3>
      </div>
      <div class="card bg-light" style="border-radius: 1rem;" class="shadow p-3 mb-5 bg-white rounded">
        <div class="box box-primary">
          <div class="box-body">
            <table width="100%" class="table table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Vehículo (Tipo)</th>
                  <th>Marca</th>
                  <th>N° de Placa</th>
                  <th>Modelo</th>
                  <th>Kilometraje</th>
                  <th>Estado</th>
                  <th>Usado Última vez</th>
                  <th>Revisado Última vez</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $veh = array("Pick-Up", "Sedan", "Vagoneta", "Bus");
                $mrc = array("Ford", "Nissan", "Ferrari", "Toyota");
                $mod = array("Fiesta", "Sentra", "Purasangue", "Hilux");
                $est = array("Disponible", "En Mantenimiento", "Retirado", "En viaje...");
                for ($i = 0; $i <= 3; $i++) {
                ?>
                  <tr>
                    <td>
                      <?php echo $veh[$i] ?>
                    </td>
                    <td>
                      <?php echo $mrc[$i] ?>
                    </td>
                    <td>
                      <?php echo $mod[$i] ?>
                    </td>
                    <td>
                      <?php echo $est[$i] ?>
                    </td>
                    <td>06/09/22</td>
                    <td>28/08/22</td>
                  </tr>
                <?php   }   ?>
              </tbody>
            </table>
          </div>
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