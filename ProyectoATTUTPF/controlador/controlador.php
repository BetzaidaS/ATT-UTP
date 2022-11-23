<?php
session_start();
require_once("modelo/user.php");
require_once("modelo/solicitud.php");
class Controller{

    private $model;
    private $model2;
    private $model3;
    private $model4;
    
    public function __CONSTRUCT(){
        $this->model = new User();
        $this->model2 = new Solicitud();
        $this->model3 = new Solicitud();
        $this->model4 = new User();
    }

    public function Index(){
        require("vista/login.php");
    }

    public function InicioAdmin(){
        require("vista/A-inicio.php");
    }

    public function SolicitudesAdmin(){
        $solicitudes = new Solicitud();
        $solicitudes = $this->model2->consultName();

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
        $assign = new Solicitud();
        $assign = $this->model3->selectPerRequest($_POST['id']);

        $driver = new User();
        $driver = $this->model4->getAvailableDrivers();
        
        require("vista/A-asignacionSolicitud.php");
    }
    public function Inicio(){
        $user = new User();
        $user = $this->model->get($_SESSION['id']);

        require("vista/C-solicitud.php");
    }
    public function SolicitudConductor(){
        require("vista/C-solicitud.php");
    }
    public function EstadoSolicitudConductor(){
        $user = new User();
        $user = $this->model->get($_SESSION['id']);

        $solicitudes  = new Solicitud();
        $solicitudes = $this->model3->selectRequestPerOfficial($_SESSION["id"]);

        require("vista/C-estadoSolicitud.php");
    }

    public function access(){
        $signInUser = new User();
        
        $signInUser->email = $_REQUEST['email'];  
        $signInUser->pass = md5($_REQUEST['pwd']);    

        //Verificamos si existe en la base de datos
        if ($resultado= $this->model->consult($signInUser)) {
            $_SESSION["acceso"] = true;
            $_SESSION["foto"] = $resultado->foto;
            $_SESSION["id"] = $resultado->id_usuario;
            $_SESSION["user"] = $resultado->nombre." ".$resultado->apellido;
            if($resultado->id_tipo_usuario == 0)
                header('Location:?op=inicioA');
            else
                header('Location:?op=inicioC');

        } else {
            header('Location:?&msg=Su contraseña o usuario está incorrecto');
        }
    }
}
