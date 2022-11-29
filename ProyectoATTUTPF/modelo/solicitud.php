<?php
class Solicitud{
	private $pdo;

	public function __construct(){
		try{
			$this->pdo = new PDO('mysql:host=localhost;dbname=att;charset=utf8', 'root', ''); 
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

    public function ObtenerSolicitudes(){
        try{
			$stm = $this->pdo->prepare("SELECT solicitud.id_solicitud, usuario.nombre, usuario.apellido,solicitud.destino, solicitud.motivo, solicitud.cant_personas 
			FROM solicitud INNER JOIN solicitud_funcionario INNER JOIN funcionario INNER JOIN usuario
			ON solicitud.id_solicitud = solicitud_funcionario.id_solicitud AND solicitud_funcionario.id_funcionario = funcionario.id_funcionario 
			AND funcionario.id_usuario = usuario.id_usuario;");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch (Exception $e){
			die($e->getMessage());
		}
    }
}