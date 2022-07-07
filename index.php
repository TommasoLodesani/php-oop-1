<?php

include __DIR__ . '/Movie.php';

$primo_film = new Movie('It', 'It','Robert Pattinson',2050,'commedia',18,'verifica eta','it');
$primo_film-> checkAge(22);
$primo_film-> changeLanguage('en');

var_dump($primo_film);


$secondo_film = new Movie('Star wars', 'Battelstar Galactica','Lorella Cuccarini',1945,'Horror',18,'verifica eta','en');
$secondo_film->checkAge(6);
$secondo_film->changeLanguage('en');
var_dump($secondo_film);