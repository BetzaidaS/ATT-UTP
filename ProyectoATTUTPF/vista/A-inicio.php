<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" />
  <title>Inicio - Admistrador</title>
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
    require_once('compl/A-header.php');
    ?>
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
                  <td>El evento se extendi??</td>
                  <td>
                    <button type="button" class="btn btn-success" >Aprobar</button>
                    <button type="button" class="btn btn-danger">Rechazar</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">002</th>
                  <td>Jacob Thornton</td>
                  <td>El tr??fico no se mueve</td>
                  <td>
                    <button type="button" class="btn btn-success" >Aprobar</button>
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
                  <th scope="col"># de veh??culos</th>
                  <th scope="col">Estado</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="cow">000001</th>
                  <td>Miguel Rodr??guez</td>
                  <td>Para formaci??n de los estudiantes</td>
                  <td>12</td>
                  <td>1 veh??culo de 15 pasajeros</td>
                  <td>
                    <a type="button" class="btn btn-success"  href="?op=asignacionSolicitudA">Aprobar</a>
                    <a type="button" class="btn btn-danger" style="color:#ffffff">Rechazar</a>
                  </td>
                </tr>
                <tr>
                  <th scope="cow">000002</th>
                  <td>Ana Castillo</td>
                  <td>Para representar a la universidad</td>
                  <td>1</td>
                  <td>1 veh??culo de 4 pasajeros</td>
                  <td>
                  <a type="button" class="btn btn-success"  href="?op=asignacionSolicitudA">Aprobar</a>
                    <a type="button" class="btn btn-danger" style="color:#ffffff">Rechazar</a>
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
                  <td>Colisi??n con otro veh??culo</td>
                  <td>Mientras pasaba una intersecci??n y el otro veh??culo no realiz?? el alto</td>
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
    require_once('compl/footer.php');
    ?>
  </footer>
</body>

</html>