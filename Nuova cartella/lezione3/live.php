<?php
//1) Utente inserisce password: password è il nostro input
//2) Validare Password e regole di validazione
//2.1)Controllare che ci sia almeno un numero
//2.2)Controllare che non sia vuoto
//2.3)Controllare lettera maiuscola
//2.4)Controllare numero di caratteri minimo 8
//3) Se regole superate, registra altrimenti rimbalza

//------
$password = readline('Inserisci password: ');

//Punto 2.2
if (!$password) {
  echo 'Vuota';
} else {
  echo 'Piena';
}
//Punto 2.1
for ($i = 0; $i < strlen($password); $i++) {
  if (is_numeric($password[$i])) {
    echo 'Si';
  } else {
    echo 'No';
  }
}
//Punto 2.4
if (strlen($password) >= 8) {
  echo "Si";
} else {
  echo "No";
}
