<?php
require_once __DIR__.('/Info.php');


/**
     *  variabili d’istanza
 */

$movie1 = new Movie('Jumanji', 110);


/**
     * metodo
 */

echo $movie1->getUpperCase();
echo $movie1->getInfo();

/**
     *  seconda istanza
 */

$movie2 = new Movie('Top Gun', 111);
echo $movie2->getUpperCase();
echo $movie2->getInfo();

// var_dump($movie1->getInfo());
// var_dump($movie2);

