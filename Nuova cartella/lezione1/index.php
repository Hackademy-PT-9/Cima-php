
<?php

//1) Ogni file per essere interpetato deve avere una estensione .php
//2) Inserire un tag di apretura (e se necessario di chisura)

//3) Come definire e stampare una variabile
// $testo = 'Ciao';
// echo $testo;


//4) Come definire e stampare una costante
// const VERSIONE = 1;
// echo VERSIONE;

//5) Come si scrive una variabile


//5.1) Ogni variabile deve avere il dollaro inziale

// $nome = 'Francesco';
// &nome = 'Francesco';
// @nome = 'Francesco';

//5.2) Le variabili non possono iniziare con dei numeri

// $56testo = 'Francesco';
// $t56esto = 'Francesco';
// $_testo = 'Francesco';

//5.3) Rispettare il flusso top - down
//5.4) PHP è case sensitive


// $testo_da_stampre = 'Francesco';//Snake case
// $testoDaStampare= 'Francesco'; //camel Case
// $testO = 'Francesco';
// $Testo = 'Francesco';


//6) Tipi di Variabili disponibili

//- Predefinite o Scalari (Primitive)
//- Composte o definite dall'utente (Complesse)

//Primitve
//Stringa, Intero, Booleano, Float e null

//Complesse
//Array e Oggetti

//Interi

// $intero = 56;
// echo gettype($intero);

//Float

// $price = 45.6;
// echo gettype($price);

//Booleano 
// $stato = 0;
// echo $stato;
//echo gettype($stato);

// Null
// $vuoto = null;

// //echo $vuoto;
// echo gettype($vuoto);


//Stringhe

// $stringa1 = 'Francesco';
// $stringa2 = 'Ciao';


// //echo  $stringa2 . ' ' . $stringa1 . "\n";
// // $virus = "";
// //$stringa3 = "Ciao $stringa2 $stringa1 \n";
// $stringa3 = "Ciao Francesco";
// echo $stringa3;


//Complessi
// Array
//$numeri = [];//Array vuoto
//PHP è 0 based
$numeri = [1, 2, 3, 4, 5, 'Francesco', false];

// echo implode($numeri);
// //echo $numeri;//No

// //Var_dump();

// var_dump($numeri);


// //print_r();

// print_r($numeri);

//$altro = ['Roma', 'Milano', $numeri];

// //var_dump($altro[2][5]);

// echo $altro[2][3];

//Array Associativi

//$array = ['chiave' => ['chiave' => 'valore']];


// $persone = [
//   'tonio' => ['nome' => 'Tonio'],
//   'ciccio' => ['nome' => 'Ciccio'],
//   'maria' => ['nome' => 'Maria'],
//   'alfredo' => ['nome' => 'Alfredo'],
//   89 => 'Luca',
//   'Marco'
// ];
// var_dump($persone);


//Operatori
// Opratori matematici

$a = 10;
$b = 5;

$somma = $a + $b;
$sottrazione = $a - $b;
$divisione = $a / $b;
$moltiplicazione = $a * $b;

//echo $moltiplicazione;

//Operatori di confronto

//Uguaglianza
// var_dump($a == $b);
// var_dump($a === $b);
// //Diverso
// var_dump($a <> $b);
// var_dump($a !== $b);

// //Maggiore

// var_dump($a > $b);
// var_dump($a >= $b);
// //Minore

// var_dump($a < $b);
// var_dump($a <= $b);

//Operatori Logici

//AND è una moltipplicazione(0*1 = 0)
var_dump($a and $b);
var_dump($a && $b);
//OR è addizione (0 + 1 = 1)
var_dump($a or $b);
var_dump($a || $b);
//NOT 
var_dump(!$a);
