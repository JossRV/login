<?php 

    class tareas{
        public function mostrarTareas($sql){
            $c = new conexion();
            $conectado = $c->conectar();
            $resultado = mysqli_query($conectado,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        public function insertarTarea($datos){
            $c = new conexion();
            $conectado = $c->conectar();
            $sql = "INSERT INTO t_tareas (nombre_tarea,fecha_fin,hora_inicio,hora_fin,comentario)
                    VALUES ('$datos[0]','$datos[1]',DATE_FORMAT(now( ), '%H:%i:%S'),'$datos[2]','$datos[3]')";
            return $resultado = mysqli_query($conectado,$sql);
        }
        public function actualizarTarea(){
            $c = new conexion();
            $conectado = $c->conectar();
            $sql="";
            return $resultado = mysqli_query($conectado,$sql);
        }
        public function eliminarTarea($id){
            $c = new conexion();
            $conectado = $c->conectar();
            $sql = "DELETE FROM t_tareas WHERE id_tarea='$id'";
            return $resultado = mysqli_query($conectado,$sql);
        }
    }

?>