<?php

$array = explode("/",$_SERVER["REQUEST_URI"]);

if (count(array_filter($array)) == 1){
    
    $json = array(
        "datalle" => "Sin Solicitudes",

    );
echo json_encode($json, true);
}else{
    if(count(array_filter($array))==2){
       
        if(array_filter($array)[2]=="cursos"){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="GET"){
                $cursos=new ControladorCursos();
                $cursos->index();
            }
        }

        }
    }

?>