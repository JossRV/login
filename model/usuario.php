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
    }

?>