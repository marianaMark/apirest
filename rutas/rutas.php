<?
$array =explode("/",$_SERVER["REQUEST_URI"]);

if(Count(array_filter($array))==1){
    $json=array(
        "datalle" => "Sin Solicitudes",

    );
}else{
    if(Count(array_filter($array))==2){
        $json=array(
            "datalle" => "Cual Solicitudes",
        );
    }
}

?>