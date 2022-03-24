<?php 

    class conexion{
        private $servidor="localhost";
        private $user="root";
        private $password="";
        private $bd="tareas";

        public function conectar(){
            try {
                $conexion= mysqli_connect(
                    $this->servidor,
                    $this->user,
                    $this->password,
                    $this->bd
                );
                return $conexion;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

    // if(conexion::conectar()){
    //     echo 'conectado con exito';
    // }

?>