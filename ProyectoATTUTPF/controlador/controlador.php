<?php
include_once 'modelo/conductor.php';
include_once 'modelo/reporte.php';
include_once 'modelo/solicitud.php';
include_once 'modelo/viaje.php';

class Controller{
    private $model;
    private $model2;
    private $model3;
    private $model4;
    private $resp;
    
    public function __CONSTRUCT(){
        $this->model = new Conductor();
        $this->model2 = new Reporte();
        $this->model3 = new Solicitud();
        $this->model4 = new Viaje();
    }

    public function Index(){
        require("vista/login.php");
    }

    public function SolicitudesAdmin(){
        require("vista/A-solicitudes.php");
    }

    public function ViajesCursoAdmin(){
        require("vista/A-viajesCurso.php");
    }

    public function InventarioVehiculoAdmin(){
        require("vista/A-inventarioVehiculo.php");
    }

    public function ReportesAdmin(){
        require("vista/A-reportes.php");
    }

    public function ConductoresAdmin(){
        require("vista/A-conductores.php");
    }

    public function RegistroVehiculoAdmin(){
        require("vista/A-registroVehiculo.php");
    }

    public function AsignacionSolicitudAdmin(){
        require("vista/A-asignacionSolicitud.php");
    }

    public function Inicio(){
        require("vista/C-solicitud.php");
    }

    public function SolicitudConductor(){
        require("vista/C-solicitud.php");
    }

    public function EstadoSolicitudConductor(){
        require("vista/C-estadoSolicitud.php");
    }
    

    public function Perfil(){
        $conductor = $this->model->ObtenerConductores(1);
        require("vista/C-perfilConductor.php");
    }

    public function InicioAdmin(){
        $listaReporte = $this->model2->ObtenerReportes();
        $listaSolicitud = $this->model3->ObtenerSolicitudes();
        $listaSalvoConducto = $this->model4->SalvoConductos();
        require("vista/A-inicio.php");
    }

    public function HistorialViajeAdmin(){
        $listaFec = $this->model4->fecha();

        $listaIzq = $this->model4->TablaIzquierda();
        $listaDer = $this->model4->TablaDerecha();
        require("vista/A-historialViaje.php");
    }

    public function Filtrar(){
        $listaFec = $this->model4->fecha(); 

        $fecha = $_REQUEST['fecha'];     
      
        $listaIzq = $this->model4->TablaIzquierdaFiltro($fecha);
        $listaDer = $this->model4->TablaDerechaFiltro($fecha);
        require("vista/A-historialViaje.php");
    }
}
