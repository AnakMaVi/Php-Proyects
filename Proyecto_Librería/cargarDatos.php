<?php

$gen1 = array("cod" => 1, "nombre" => "Ciencia Ficción");
$gen2 = array("cod" => 2, "nombre" => "Comedia");
$gen3 = array("cod" => 3, "nombre" => "Distopías");
$gen4 = array("cod" => 4, "nombre" => "Drama");
$gen5 = array("cod" => 5, "nombre" => "Histórica");
$gen6 = array("cod" => 6, "nombre" => "Terror");
$array = array($gen1, $gen2,$gen3,$gen4,$gen5,$gen6);
$json = json_encode($array);
echo $json;
?>
