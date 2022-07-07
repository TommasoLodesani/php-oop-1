<?php

include __DIR__ . '/Movie.php';

$primo_film = new Movie('It', 'It','Robert Pattinson',2050,'commedia',18,'it');
$primo_film-> checkAge(22);
$primo_film-> changeLanguage('en');



$secondo_film = new Movie('Star wars', 'Battelstar Galactica','Lorella Cuccarini',1945,'Horror',18,'en');
$secondo_film->checkAge(6);
$secondo_film->changeLanguage('en');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h3>
        <?= ?>
    </h3>
    
</body>
</html>


