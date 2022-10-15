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
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>

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
                <li class="nav-item"><a class="nav-menu-link nav-link nav-menu-link_active" href="#">Solicitudes</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="historialViaje.html">Historial</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Viajes en Curso</a></li>
                <li class="nav-item"><a class="nav-link" href="inventarioV.php">Vehículos</a></li>
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
                <h2>Solicitudes</h2>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <?php
                    for ($i = 0; $i <= 2; $i++) {
                    ?>
                        <button class="accordion">Melida Castillo</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="./asignaciones.php?" class="btn btn-outline-success mb-2">Aceptar</i></a>
                            <a href="" class="btn btn-outline-danger mb-2">Rechazar</i></a><br>
                        </div>
                    <?php   }   ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    </div>
    <footer>
        <?php
        require_once('../complementos/fotter.php');
        ?>
    </footer>
</body>

</html>