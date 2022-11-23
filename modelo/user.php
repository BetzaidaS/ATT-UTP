<?php
    class User
    {
        private $pdo;

        public $id;
        public $id_tipo_usuario;
        public $nombre;
        public $apellido;
        public $email;
        public $pass;
        public $foto;

        public function __CONSTRUCT()
        {
            $this->model = array();
            try {
                $this->pdo = Db::StartUp();     
            } catch(Exception $e) {
                die($e->getMessage());
            }
        }

        public function consult(user $data){
            try{
                $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE email = ? AND pass = ?");
                $stm->execute(array($data->email, $data->pass));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function get($id)
        {
            try 
            {
                $stm = $this->pdo
                        ->prepare("SELECT * FROM usuario WHERE id_usuario = ?");
                        

                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function getAllUsers(){
            try 
            {
                $stm = $this->pdo->prepare("SELECT * FROM usuario");
                        
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function getAvailableDrivers(){
            try 
            {
                $stm = $this->pdo->prepare("SELECT u.nombre, u.apellido, c.estado FROM usuario u JOIN conductor c ON u.id_usuario = c.id_usuario");
                        
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

    }
?>