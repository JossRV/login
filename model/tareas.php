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
            $sql = "INSERT INTO t_tareas (nombre_tarea,fecha_incio,fecha_fin,hora_inicio,hora_fin,comentario,tupla)
                    VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";
            return $resultado = mysqli_query($conectado,$sql);
        }
        public function actualizarTarea($datos){
            $c = new conexion();
            $conectado = $c->conectar();
            $sql="UPDATE t_tareas SET nombre_tarea= '$datos[0]',
                                      fecha_incio= '$datos[1]',
                                      fecha_fin= '$datos[2]',
                                      hora_inicio= '$datos[3]',
                                      hora_fin= '$datos[4]',
                                      comentario= '$datos[5]',
                                      tupla= '$datos[6]'
                                      WHERE id_tarea= '$datos[7]'";
            return $resultado = mysqli_query($conectado,$sql);
        }
        public function eliminarTarea($id){
            $c = new conexion();
            $conectado = $c->conectar();
            $sql = "DELETE FROM t_tareas WHERE id_tarea='$id'";
            return $resultado = mysqli_query($conectado,$sql);
        }
        public function actualizarTupla($datoTupla){
            $c = new conexion();
            $conectado = $c->conectar();
            $sql="UPDATE t_tareas SET tupla='$datoTupla[0]'
                                      WHERE id_tarea='$datoTupla[1]'";
            return $resultado = mysqli_query($conectado,$sql);
        }
    }

?>