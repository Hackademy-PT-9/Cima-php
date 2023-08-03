<?php
//Esercizio1
const BUDGET = 1000;
$price = readline("Inserisci cifra: ");
if ($price <= BUDGET) {
  echo "Paga in 3 comode rate da: " .  round($price / 3, 2) . " Euro";
} else {
  echo "Non ha tutto quel Budget ";
}
