<!-- Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor.
 A continuació, mostra per pantalla per a X i Y:

El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul. -->

<!-- Per N i M realitzaràs el mateix.

Per a totes les variables (X, Y, N, M)

El doble de cada variable.
La suma de totes les variables.
El producte de totes les variables. -->

<?php

$x = 20;
$y = 5;
$n = 10.52;
$m = 7.04;

echo 'x = ' . $x . '  y = ' . $y . '<br>';
echo 'Suma: ' . $x + $y . '<br>';
echo 'Resta: ' . $x - $y . '<br> ';
echo 'Producte: ' . $x * $y . '<br>';
echo 'Mòdul: ' . $x % $y . '<br>';

echo '<br>' . 'n = ' . $n . '  m = ' . $m . '<br>';
echo 'Suma: ' . $n + $m . '<br>';
echo 'Resta: ' . $n - $m . '<br> ';
echo 'Producte' . $n * $m . '<br>';
echo 'Mòdul' . $n % $m . '<br>';

echo '<br>' . ' Doble de x: ' . $x * 2 . '<br>' . ' Doble de y: ' . $y * 2 . '<br>' . ' Doble de n: ' . $n * 2 . '<br>' . 'Doble de m: ' . $m * 2 .'<br>';
echo 'Suma de totes les variables: ' . $x + $y + $n + $m . '<br>'; 
echo 'Producte de totes les variables ' . $x * $y * $n * $m;
 
?>