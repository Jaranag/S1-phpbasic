<!-- Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.

Afegeix un valor més a l'array que conté 3 integers.
Mescla els dos arrays i imprimeix la mida de l'array resultant per pantalla.
Ara imprimeix per pantalla l'array resultant valor a valor. -->

<?php

$array1 = array(2, 4 ,5);
$array2 = array(3, 6, 7, 9, 1);

$array1[] = 12;

$arrayComb = array_merge($array1, $array2);

echo 'Llargada de l array resultant: ' . count($arrayComb) . '<br>';

$x = 1;
foreach($arrayComb as $num) {
    echo 'Index ' . $x . ': ' . $num . '<br>';
    $x++;
}
?>