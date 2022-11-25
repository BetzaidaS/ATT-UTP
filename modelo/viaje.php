<?php
class Viaje
{
    private $pdo;

    public $id_viaje;	
    public $id_solicitud;	
    public $id_conductor;	
    public $id_funcionario;	
    public $id_vehiculo;	
    public $estado_viaje;

    public function __CONSTRUCT()
    {
        try{
			$this->pdo = Db::StartUp();     
		}
		catch(Exception $e){
			die($e->getMessage());
		}
    }

    public function getAllTravels(){
        try 
        {
            $stm = $this->pdo->prepare("SELECT * FROM viaje");
                    
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function assignTravel(viaje $data){
        try 
        {
            $stm = $this->pdo->prepare("INSERT INTO viaje (id_solicitud, id_conductor, id_funcionario, id_vehiculo, estado_viaje)
                                        VALUES (?,?,?,?,?)");                    
            $stm->execute(
                array(
                    $data->id_solicitud,
                    $data->id_conductor,
                    $data->id_funcionario,
                    $data->id_vehiculo,
                    $data->estado_viaje
                )
            );

            $this->msg="Su registro se ha guardado exitosamente!";
        } catch (Exception $e) {
            if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
                $this->msg="El viaje ya está registrado en el sistema";
            } else {
                $this->msg="Error al guardar los datos";
            }
        }
        echo '<script type="text/JavaScript">
                alert("'.$this->msg.'")
              </script>';
        return $this->msg;
    }
}

?>