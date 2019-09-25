<?php

$PARAMETRE_1= 'la lune';
$PARAMETRE_2='le feu';


function writeSecretSentence (string $PARAMETRE_1,string $PARAMETRE_2)
{

    echo $PARAMETRE_1 . ' '. 's\'incline face à ' . $PARAMETRE_2;
    return $result;
}

writeSecretSentence ($PARAMETRE_2,$PARAMETRE_1);
