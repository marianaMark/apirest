<?php
class ModeloCliente{
    static public function index($tabla){
        $stmt=Conexion:: conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt=close();
        $stmt= null;

    }
}


?>