<?php
  $datoslibros = simplexml_load_file("libros.xml");
  $libros = $datoslibros->xpath("//libros");
$librosarr= array ();
  for ($i = 0; $i < count($libros); $i++) {
      $librosarr($libros[$i]);
  }
  echo json_encode($librosarr);