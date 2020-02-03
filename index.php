<?php

require_once "pelicula.php";
require_once "cine.php";

$peli = new Pelicula("Lo que el código se llevó", 89, 12, "Pepito Grillo");
echo "<h1> {$peli->info()}</h1>";

$cine = new Cine(3,3,22,$peli);

var_dump($cine->getButacas());