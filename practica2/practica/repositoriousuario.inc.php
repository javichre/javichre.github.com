<?php

class repositoriousuario
{
    public static function obtener_todos($conexion)
    {

        $usuarios = array();

        if (isset($conexion)) {

            try {

                include_once 'usario.inc.php';

                $sql = "select * from usuarios";

                $sentencia = $conexion->prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios[] = new Usuario(
                            $fila['id'],
                            $fila['nombre'],
                            $fila['email'],
                            $fila['password'],
                            $fila['fecha_registro'],
                            $fila['activo']
                        );
                    }
                } else {
                    print  'no hay usuario';
                }
            } catch (PDOException $EX) {
                print "error" . $EX->getMessage();
            }
        }
        return $usuarios;
    }
}
