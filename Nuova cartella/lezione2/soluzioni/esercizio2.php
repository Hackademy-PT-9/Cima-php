<?php


//Esercizio2
$numeri = [10, 22, 33, 4, 55, 6, 7, 8, 9, 90, 67, 34];
$sum = 0;
foreach ($numeri as $numero) {
  if ($numero % 2 == 0) {
    $sum = $sum + $numero;
  }
}

echo $sum;
