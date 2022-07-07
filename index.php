<?php

include __DIR__ . '/Movie.php';

$primo_film = new Movie('It', 'It','Robert Pattinson',2050,'commedia',18,'verifica eta');
$primo_film-> checkAge(22);
var_dump($primo_film);


$secondo_film = new Movie('Star wars', 'Battelstar Galactica','Lorella Cuccarini',1945,'Horror',18,'verifica eta');
$secondo_film->checkAge(6);
var_dump($secondo_film);