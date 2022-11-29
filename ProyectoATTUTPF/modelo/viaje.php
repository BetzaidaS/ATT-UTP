<?php
class Viaje{
	private $pdo;

	public function __construct(){
		try{
			$this->pdo = new PDO('mysql:host=localhost;dbname=att;charset=utf8', 'root', ''); 
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

    public function SalvoConductos(){
        try{
			$stm = $this->pdo->prepare("SELECT viaje.id_viaje, usuario.nombre, usuario.apellido, viaje.motivo 
			FROM usuario INNER JOIN viaje ON viaje.motivo <> 'null' AND viaje.id_usuario = usuario.id_usuario;");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
    }

	public function TablaIzquierda(){
        try{
			$stm = $this->pdo->prepare("SELECT viaje.id_viaje, solicitud.fecha, solicitud.destino, usuario.cedula, usuario.email
			FROM viaje INNER JOIN solicitud INNER JOIN usuario WHERE usuario.id_tipo_usuario = 1 AND solicitud.id_solicitud = viaje.id_solicitud GROUP BY viaje.id_viaje;");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
    }

	public function TablaDerecha(){
        try{
			$stm = $this->pdo->prepare("SELECT usuario.cedula, viaje.id_viaje, usuario.nombre, usuario.apellido, vehiculo.num_placa, solicitud.cant_personas
			FROM viaje INNER JOIN vehiculo INNER JOIN solicitud INNER JOIN usuario WHERE usuario.id_tipo_usuario = 2 AND solicitud.id_solicitud = viaje.id_solicitud 
			AND viaje.id_vehiculo = vehiculo.id_vehiculo;");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
    }
	public function fecha(){
		try{
			$stm = $this->pdo->prepare("SELECT solicitud.fecha FROM solicitud GROUP BY solicitud.fecha;");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function TablaIzquierdaFiltro($fecha){
        try{
			$stm = $this->pdo->prepare("SELECT viaje.id_viaje, solicitud.fecha, solicitud.destino, usuario.cedula, usuario.email 
			FROM viaje INNER JOIN solicitud INNER JOIN usuario ON usuario.id_tipo_usuario = 1 AND solicitud.id_solicitud = viaje.id_solicitud 
			AND viaje.id_usuario = usuario.id_usuario WHERE solicitud.fecha = ?");
			$stm->execute(array($fecha));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
    }

	public function TablaDerechaFiltro($fecha){
        try{
			$stm = $this->pdo->prepare("SELECT usuario.cedula, viaje.id_viaje, usuario.nombre, usuario.apellido, vehiculo.num_placa, solicitud.cant_personas 
			FROM viaje INNER JOIN vehiculo INNER JOIN solicitud INNER JOIN usuario ON usuario.id_tipo_usuario = 2 
			AND solicitud.id_solicitud = viaje.id_solicitud AND viaje.id_vehiculo = vehiculo.id_vehiculo WHERE solicitud.fecha=?");
			$stm->execute(array($fecha));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
    }
}