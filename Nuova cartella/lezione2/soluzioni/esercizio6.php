<?php
//Esercizio 7
$budget = readline('Inserisci Budget: ');
while ($budget > 0) {
  $price = readline('Costo articolo: ');
  if ($price <= $budget) {
    $budget = $budget - $price;
    echo "Budget Rimanente : $budget euro \n";
  } else {
    echo "Non ha tutti questi soldi!\n";
  }
}



// Con il ciclo do While invece
do {
  $budget = readline('Inserisci Budget: ');
} while ($budget <= 0);

do {
  $price = readline('Costo articolo: ');
  if ($price <= $budget) {
    $budget = $budget - $price;
    echo "Budget Rimanente : $budget euro \n";
  } else {
    echo "Non ha tutti questi soldi!\n";
  }
} while ($budget > 0);
