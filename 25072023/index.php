<?php
//intero
$valore = 5;

//stringa
$str = 'sono una stringa';
//echo (gettype($str));

//float
$valore_float = 45.6;
//echo (gettype($valore_float));

//boolean
$bool = true;
//echo(gettype($bool));

//null
$variabile_nulla = null;
//echo(gettype($variabile_nulla));

//costanti
const VALORE = 5;
//echo VALORE;
const STR = 'sono una stringa';
const VALORE_FLOAT = 45.6;
const BOOLEANO = true;
const variabile_nulla = NULL;

//concatenazione

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";
$text7 = 'bevuto';
$text8 = "tutto";

//echo $text1 . ' ' . $text2 . ' ' . $text3 . ' ' . $text4 . ' ' . $text5 . ' ' . $text6 . ' ' . $text7 . ' ' . $text8;

//array


// $words1 = [
//    'una',
//    67,
//    'vita',
//    'colle',
//     'mi',
//     'rosso',
//    [
//        'oscura',
//        'era',
//        89,
//        [
//            'mezzo',
//            [
//                'cammin',
//                'Nel',
//                [
//                    'selva',
//                    'la',
//                    [
//                        'via',
//                        'una',
//                        true,
//                    ]
//                 ],
//            ]
//         ],
//         'ritrovai',
//         'per'
//     ],
//    'diritta'
// ];

// $words2 = [
//    'elemento1' => 25.89,
//     'elemento2' => 'nostra',
//    'elemento3' => [
//         'Virgilio',
//         'smarrita',
//         'ché'
//    ]
// ];

// $results = ($words1[6][3][1][1] . " ".$words1[6][3][0]);
// echo $results;

//6

$x = 10;
$y = 18;
$z = 56.0;
$t = 0.8;

// Blocco da eseguire
//$somma = $x+$y+$z+$t;
//$sottrazione = $x-$y-$z-$t;
//$divisone = $x/$y/$z/$t;
//$moltiplicazione = $x*$y*$z*$t;
//$media = ($x+$y+$z+$t)/4;
//echo ' divisione= '.$divisone.' somma= '.$somma.' sottrazione= '.$sottrazione.' media= '. $media;

//8

// $a = false;
// $b = true;
// $c = true;
// $d = false;

// //Primo Blocco Esempio Completo
// $ab = !$a && $b; //true
// $ad = $a || $d; // false
// $bc = $b && $c; //True
// $bd = !$b || $d; //False
// $cb = $c && $b; //True
// $ca = !$c || $a; //false

// //Secondo Blocco Da completare
// $cabc = $ca && $bc; //false
// $cbbc = $cb && $bc; //true
// $bdab = $bd || $ab; //false
// $bccb = $bc && !$cb; //true
// $bcab = !$bc || !$ab; //false
// $bcca = $bc || $ca; //true

// //Terzo Blocco Da completare
// $cbbccabc = $cbbc || $cabc; //true
// $bccbbdab = $bccb || $bdab; //true
// $cabcbcca = $cabc && $bcca; //false
// $bdabbccb = $bdab && $bccb; //false
// $cbbcbccb = $cbbc && !$bccb; //true
// $cabcbccb = $cabc || $bccb; //false

// //Output Esempio Completo
// var_dump($cbbccabc); //True
// var_dump($bccbbdab); //True
// var_dump($cabcbcca); //False
// var_dump($bdabbccb); //False
// var_dump($cbbcbccb); //False
// var_dump($cabcbccb); //True

//9)

// const BUDGET = 1000;
// $valore_da_spendere=readline('Inserisci un valore');
// if($valore_da_spendere<=BUDGET)
// {
//     $valore_rata=$valore_da_spendere/3;
//     $valore_rata=round($valore_rata,2);
//     echo "Paga in 3 comode rate da $valore_rata euro";
// }

//10

// $numeri = [10, 22, 33, 4, 55, 6, 7, 8, 9, 90, 67, 34];
// $somma_num=0;
// $contatore=0;
// foreach($numeri as $valore_arr)
// {
//     if($valore_arr%2==0){
//         $somma_num+=$valore_arr;
//         $contatore=$contatore+1;
//     }
// }
// echo $somma_num;
// echo "media= ".$somma_num/$contatore;

//11


// $users = [
//     [
//       'name' => 'Marco', 
//       'gender' => 'M',
//     ],
//     [
//       'name' => 'Vanessa',
//       'gender' => 'F',
//     ],
//     [
//       'name' => 'Jack',
//       'gender' => 'M',
//     ],
//     [
//       'name' => 'Mari*',
//       'gender' => '',
//     ],
//   ];
//  foreach($users as $utente)
//  {
//     echo( "buongiorno ". $utente['name'].''.$utente['gender']);
//  }

//12

// $numeri =[1,2,3,4,5,6,7,8,9,10];
// $somma_num=0;
// foreach($numeri as $valore_arr)
// {
//     if($valore_arr%2==0){
//         $somma_num+=$valore_arr;
//     }
// }
//     echo $somma_num;

//13

// for($i=0; $i<100;$i++)
// {
//     if($i%3==0 && $i%5==0)
//     {
//         echo "HACKADEMY";
//     }
//     else if($i%5==0){
//         echo "JAVASCRIPT";
//     }else if($i%3==0)
//     {   
//         echo "PHP";
//     }else{
//         echo $i;
//     }
// }

//14

// $budget = readline("Inserisci il tuo budget");
// while($budget>0)
// {

//     $valore_articolo = readline("Inserisci prezzo da spendere per prodotto");
//     if($budget >=$valore_articolo)
//     {
//         $budget-=$valore_articolo;
//         echo "budget rimanente: $budget";
//     }else
//     {
//         echo "Inserisci valore valido";
//     }


// }
