<?php
class Controller{

    public function Index(){
        require("vista/login.php");
    }

    public function InicioAdmin(){
        require("vista/A-inicio.php");
    }

    public function SolicitudesAdmin(){
        require("vista/A-solicitudes.php");
    }

    public function HistorialViajeAdmin(){
        require("vista/A-historialViaje.php");
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
}
