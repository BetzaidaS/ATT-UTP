<?php
session_start();
require_once("modelo/user.php");
require_once("modelo/solicitud.php");
require_once("modelo/vehiculo.php");
require_once("modelo/viaje.php");
class Controller{

    private $model;
    private $model2;
    private $model3;
    private $model4;
    private $model5;
    private $model6;
    private $model7;
    
    public function __CONSTRUCT(){
        $this->model = new User();
        $this->model2 = new Solicitud();
        $this->model3 = new Solicitud();
        $this->model4 = new User();
        $this->model5 = new Vehiculo();
        $this->model6 = new Vehiculo();
        $this->model7 = new Viaje();
    }

    public function Index(){
        require("vista/login.php");
    }

    public function InicioAdmin(){
        require("vista/A-inicio.php");
    }

    public function SolicitudesAdmin(){
        $solicitudes = new Solicitud();
        $solicitudes = $this->model2->consult();

        require("vista/A-solicitudes.php");
    }

    public function HistorialViajeAdmin(){
        require("vista/A-historialViaje.php");
    }

    public function ViajesCursoAdmin(){
        require("vista/A-viajesCurso.php");
    }

    public function InventarioVehiculoAdmin(){
        $car = new Vehiculo();
        $car = $this->model5->getAllVehicules();

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

        $transport = new Vehiculo();
        $transport = $this->model6->getTypeVehicle();
        
        require("vista/A-asignacionSolicitud.php");
    }

    public function AceptarSolicitud(){
        $id_sol = $_REQUEST['id_s'];

        if (isset($_POST['assign'])) {
            $travel = new Viaje();

            $id_con = $_REQUEST['driver'];

            $travel->id_solicitud = $id_sol;
            $travel->id_conductor = $id_con;
            $travel->id_funcionario = $_REQUEST['id_f'];
            $travel->id_vehiculo = $_REQUEST['car'];
            $travel->estado_viaje = 'A';

            $this->resp = $this->model7->assignTravel($travel);
            $this->res = $this->model3->update($id_sol, 1);
            $this->model->updateDriver($id_con);

            header('Location:?op=inicioA&msg='.$this->resp.'&up='.$this->res);
        }
        elseif (isset($_POST['decline'])) {
            $this->model3->update($id_sol, 2);

            header('Location:?op=inicioA&msg=Se+ha+rechazado+la+solicitud');
        }
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
