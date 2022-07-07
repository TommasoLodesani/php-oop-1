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

    <div>
        <h2>
            Titolo:
            <?=$primo_film->titolo?>
        </h2>
        <ul>
            <li> Titolo originale:
            <?=$primo_film->titolo_originale?>
            </li>
            <li>Regista:
            <?=$primo_film->regista?>
            </li>
            <li>Anno di uscita
            <?=$primo_film->anno?>
            </li>
            <li>Genere
            <?=$primo_film->genere?>
            </li>
            <li>Vietato ai minori di:
            <?=$primo_film->age?> anni
            </li>
            <li>Controllo età:
            <?=$primo_film->accesso?>
            </li>
            <li>Lingua originale:
            <?=$primo_film->lingua_originale?>
            </li>
            <li>Lingua selezionata dall'utente:
            <?=$primo_film->lingua_audio?>
            </li>
        </ul>
    </div>

    <div>
    <h2>
            Titolo:
            <?=$secondo_film->titolo?>
        </h2>
        <ul>
            <li> Titolo originale:
            <?=$secondo_film->titolo_originale?>
            </li>
            <li>Regista:
            <?=$secondo_film->regista?>
            </li>
            <li>Anno di uscita
            <?=$secondo_film->anno?>
            </li>
            <li>Genere
            <?=$secondo_film->genere?>
            </li>
            <li>Vietato ai minori di:
            <?=$secondo_film->age?> anni
            </li>
            <li>Controllo età:
            <?=$secondo_film->accesso?>
            </li>
            <li>Lingua originale:
            <?=$secondo_film->lingua_originale?>
            </li>
            <li>Lingua selezionata dall'utente:
            <?=$secondo_film->lingua_audio?>
            </li>
        </ul>

    </div>
    
</body>
</html>


