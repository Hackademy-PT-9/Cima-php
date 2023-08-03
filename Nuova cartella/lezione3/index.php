<?php


//2 tipi di funziono
// Built in function
// gettype();
// round();
// User function 

// saluta();


// function saluta()
// {
//   echo "Ciao \n";
// }


// saluta();


//Parametri
//parametro per valore

// $testo1 = 'Piacere, Francesco';
// $testo2 = 'Piacere, carlo';
// $testo3 = 'Piacere, maria';
// $testo4 = 11;






// printString('Piacere, Francesco');
// printString($testo2);
// printString($testo1);
// printString($testo3);



// function printString($string)
// {
//   echo "$string  \n";
// }

// function printString($contenitore_valore)
// {
//   echo "$contenitore_valore  \n";
// }

// echo $contenitore_valore;

// $numero1 = 10;
// $numero2 = 5;
// $numero3 = 3;
// $numero4 = 89;

// function somma($val1, $val2, $val3 = 0)
// {
//   $somma = $val1 + $val2 + $val3;
//   //echo $somma . "\n";
//   //return $val1 + $val2; //ritorno un valore intero
//   return $somma; //ritorno un valore intero

//   echo "test"; // non viene eseguito in quanto il return ha chiuso tutto
// }

// $tot = somma($numero1, $numero2) + somma($numero2, $numero4);
// echo $tot;

//parametri per riferimento

//$undici = 10; //Dichiaro una variabile e assegno un valore
//0x1232ABsgdf = 10

// function cambiaNumero($numero)
// {
//   return $numero = 12;
// }
// echo cambiaNumero($numero);
// echo $numero; 
// function cambiaNumero(&$undici)
// {
//   return $dieci = 12;
// }
// cambiaNumero($dieci);
// echo $dieci;

// echo $dieci + $dieci;

//SPlat Operator

// $a = 2;
// $b = 5;
// $c = 7;
// $d = 9;
// $z = 2;
// $t = 10;


// function stampaNumeri(...$array)
// {
//   foreach ($array as $letter) {
//     echo $letter . "\n";
//   }

//   //echo $uno . $due . $tre . $quattro . $cinque;
// }


// stampaNumeri($a, $b, $c, $d, $z, $t);
// stampaNumeri($a, $b, $c);



$persons1 = 'Carlo';
$persons2 = 'Alberto';
$persons3 = 'Lucia';
$persons4 = 'Giulio';
$persons5 = 'Matteo';
$persons6 = 'Matteo';


lists($persons1);
lists($persons5, $persons2);

function lists(...$array)
{
  foreach ($array as $name) {
    //echo "$name si è registrato \n";
    printText($name);
  }
}

function printText($string) //Stampa testo
{
  echo "$string si è registrato \n";
}



// function lists($persons1, $persons2, $persons3, $persons4, $persons5,)
// {
//   $array = [$persons1, $persons2, $persons3, $persons4, $persons5];
//   foreach ($array as $letter) {
//     printText($letter);
//   }
// }
