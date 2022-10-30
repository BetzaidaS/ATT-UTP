<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" />
  <title>Inventario de vehículos - Administrador</title>
  <!-- logo-->
  <link rel="icon" type="image/x-icon" href="../img/tropical_utp_logo-modified.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="./public/css/estilo.css" rel="stylesheet">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header>
    <?php
    require('compl/A-header.php');
    ?>
  </header>
  <div class="content">
    <div class="container">
      <br><br>
      <center>
        <h2 style="color: black;">Inventario de Vehículos</h2>
      </center>
      <br>
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
  <br><br>
  </div>
  <footer>
    <?php
    require('compl/footer.php');
    ?>
  </footer>
</body>

</html>