<?php
// // Sequenza
// echo $testo;


// $testo = 'Francesco';

// // Selezione if, if else e if else if

// if (2 > 1) {
//   //Condizione vera
// }

// if (2 > 4) {
//   //Condizione vera
// } else {
//   //Condizione falsa
// }


//Ternario

//(2 > 4) ? 'Vero' : 'falso';


// if(2 > 4){
//   //Condizione vera
// } else if (2 == 2) {
//   //Condizione falsa
// } else {
//   //Condizione falsa
// }

//Switch 

// $parametro = readline('Inserisci numero da confrontare: ');



// switch ($parametro) {
//   case 2:
//     echo 'Hai scritto 2';
//     break; //Break blocca immediatamente il codice, ed esce dallo switch
//   case 4:
//     echo 'Hai scritto 4';
//     break;

//   default:
//     echo 'Numero non presente';
//     break;
// }


// $ruolo_utente = readline('Inserisci il tuo ruolo: ');


// switch (strtolower($ruolo_utente)) {
//   case 'admin':
//     echo 'Posso fare tutto';
//     break;

//   case 'utente':
//     echo 'Sono un semplice user.';
//     break;

//   default:
//     echo 'Ruolo non gestito';
//     break;
// }


//Iterazione

//For // deve ciclare un numero finito di elementi

// $numeri = [10, 22, 33, 4, 55, 6, 7, 8, 9, 90, 67, 34];

// for ($i = 0; $i < count($numeri); $i++) {
//   echo "Il numero in questione è: $numeri[$i] \n";
// }

//foreach
$persone_elenco = [
  'francesco-12345' =>  ['name' => 'Francesco', 'age' => 32],
  'carlo' =>  ['name' => 'Carlo', 'age' => 12],
  'gigi' => ['name' => 'Gigi', 'age' => 23],
  'maria' =>  ['name' => 'Maria', 'age' => 20],
  'lucia' => ['name' => 'Lucia', 'age' => 25],
  'donatella' => ['name' => 'Donatella', 'age' => 25],
];


// foreach ($persone_elenco as $persona_elenco) {
//   if ($persona_elenco['age'] > 20) {
//     echo "la persona in questione è: " . $persona_elenco['name'] . ', la sua età: ' . $persona_elenco['age'] . "\n";
//   } elseif ($persona_elenco['age'] == 20) {
//     echo "La persona " . $persona_elenco['name'] . " ha una eta uguale a 20 \n";
//   } else {
//     echo "La persona " . $persona_elenco['name'] . " ha una eta minore di 20 \n";
//   }
// }

// //Chiavi 
// foreach ($persone_elenco as $chiave => $persona_elenco) {
//   if ($chiave == 'francesco-12345') {
//     echo "Posizione " .  $chiave . ", della persona: " . $persona_elenco['name'] . "\n";
//   }
// }


$i = 12;

//while
// while ($i <= 10) { //Esce sempre quando è falsa
//   echo "$i\n";
//   $i++;
// }



//do while

// do {
//   echo "$i\n";
//   $i++;
// } while ($i <= 10); //Esce sempre quando è falsa


//break


$numeri = [10, 22, 33, 4, 55, 6, 7, 8, 9, 55, 67, 34];

for ($i = 0; $i < count($numeri); $i++) {
  if ($numeri[$i] == 55) {
    continue; //solo un un ciclo iterativo
  }
  echo "Il numero in questione è: $numeri[$i] \n";
  // if ($numeri[$i] == 4) {
  //   break;//solo un un ciclo iterativo
  // }

}
