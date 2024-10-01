<?php

class ControladorCursos {

    public static function index () {
        $cursos=ModeloCursos::index("cursos");
        $json=array(
            "array"=> 200,
            "detalle"=> $cursos

        );
        echo json_encode($json, true);
        return;


    }
}


?>