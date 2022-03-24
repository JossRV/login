<?php 

    class usuario{
        public function logear($usuario, $pass){
            try {
                $con = new conexion();
                $conexion = $con->conectar();

                $sql="SELECT * FROM t_usuarios
                    WHERE usuario = '$usuario'
                    AND password = '$pass'";
                $respuesta = mysqli_query($conexion,$sql);

                // debemos preguntar cuantos registros existen
                $existe = mysqli_num_rows($respuesta);
                if ($existe > 0) {
                    $_SESSION['usuario']=$usuario;
                    return true;
                }else{
                    return false;
                }
            } catch (\Throwable $th) {
                return $th->getMessage();
            }   
        }
        public function registrarUsuario($datos){
            $con = new conexion();
            $conexion = $con->conectar();
            $sql="INSERT INTO t_usuarios(usuario,password,nombre,apellido_paterno,apellido_materno)
                  VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            $resultado=mysqli_query($conexion,$sql);
            return $resultado;
        }
    }

?>