<?php

function leer_config($nombre, $esquema) {
    $config = new DOMDocument();
    $config->load($nombre);

    // se valida el esquema del fichero XML
    $respuesta = $config->schemaValidate($esquema);
    if ($respuesta === FALSE) {
        throw new Exception("Error: Revise fichero de configuración");
    }

    // se cargan los datos del fichero XML
    $datos = simplexml_load_file($nombre);
    $usu = $datos->xpath("//usuario");
    $clave = $datos->xpath("//clave");
    
    // Guardamos el resultado del usuario y la clave
    $resultados = [];
    $resultados["usuario"] = $usu[0];
    $resultados["clave"] = $clave[0];
    return $resultados;
}

function comprobar_usuario($nombre, $clave) {
    $respuesta = leer_config(dirname(__FILE__) . "/configuracion.xml", dirname(__FILE__) . "/configuracion.xsd");
    return ($nombre == $respuesta["usuario"] && $clave == $respuesta["clave"]);
}


function cargar_genero(){

    $gen1 = array("cod" => 1, "nombre" => "Ciencia Ficción");
    $gen2 = array("cod" => 2, "nombre" => "Comedia");
    $gen3 = array("cod" => 3, "nombre" => "Distopías");
    $gen4 = array("cod" => 4, "nombre" => "Drama");
    $gen5 = array("cod" => 5, "nombre" => "Histórica");
    $gen6 = array("cod" => 6, "nombre" => "Terror");
    $array = array($gen1, $gen2,$gen3,$gen4,$gen5,$gen6);
    $json = json_encode($array);
    echo $json;
}


function cargar_libros_genero($gener){
    $datoslibros = simplexml_load_file("libros.xml");
    $libros = $datoslibros->xpath("//libros");
    $generossarr= array ();
    for ($i = 0; $i < count($libros); $i++) {
        if ($libros[$i]->genero == $gener) {
            $generossarr=($libros[$i]);
    }}
    echo json_encode($generossarr);
}



function cargar_libros(){
   
    $datoslibros = simplexml_load_file("libros.xml");
    $libros = $datoslibros->xpath("//libros");
 $librosarr= array ();
    for ($i = 0; $i < count($libros); $i++) {
        $librosarr($libros[$i]);
    }
    echo json_encode($librosarr);
  
}

?>





