<?php
require_once("modelo/db.php");
require("controlador/controlador.php");
$controller = new Controller;

if (isset($_GET['op'])){

    $opcion=$_GET['op'];
    switch($opcion){
        case "acceder":
            $controller->access();
            break;
        case "inicioA":
            $controller->InicioAdmin();
            break;
        case "solicitudesA":
            $controller->SolicitudesAdmin();
            break;
        case "historialViajeA":
            $controller->HistorialViajeAdmin();
            break;
        case "viajesCursoA":
            $controller->ViajesCursoAdmin();
            break;
        case "inventarioVehiculoA":
            $controller->InventarioVehiculoAdmin();
            break;
        case "reportesA":
            $controller->ReportesAdmin();
            break;
        case "conductoresA":
            $controller->ConductoresAdmin();
            break;
        case "registroVehiculoA":
            $controller->RegistroVehiculoAdmin();
            break;
        case "asignacionSolicitudA":
            $controller->AsignacionSolicitudAdmin();
            break;
        case "inicioC":
            $controller->Inicio();
            break;
        case "solicitudC":
            $controller->SolicitudConductor();
            break;
        case "estadoSolicitudC":
            $controller->EstadoSolicitudConductor();
            break;
        default:
            $controller->Index();
    }
}else{
    $controller->Index();
}
?>