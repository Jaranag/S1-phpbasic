<!-- Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després:

Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings. -->

<?php

$hello = 'Hello World';

echo $hello . '<br>';
echo strtoupper($hello) . '<br>';
echo 'Llargada del string: ' . strlen($hello) . '<br>';
echo strrev($hello) . '<br>';

$cursPHP = 'Aquest és el curs de PHP';

echo $hello . '. ' . $cursPHP;



?>