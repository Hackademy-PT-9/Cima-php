<?php
// La famosa azienda Aulab ha appena acquistato 5 aziende più piccole con sedi sparse in tutte il mondo.
// Vi è stato chiesto di realizzare un sistema di monitoraggio fiscale per ognuna di queste Sedi.
// Essendo dati finanziari, gli eventuali errori di logica devono rasentare lo 0.
// Utilizzare, quindi, un approccio orientato agli oggetti per risolvere la traccia.


// Esercizio 1

// Creare una classe Azienda (Company) che abbia gli attributi public:

// - Nome: Nome della sede;
// - Sede: Stato in cui è ubicata la sede;
// - Totale Dipendenti (default=0): Numero di dipendenti assunti in quella sede.

// Definire la funzione __construct() come visto a lezione per prendere in input i 3 attributi.

class Company{
    public $name;
    public $sede;
    public $dipendenti;
    public static $total = 0;

    public function __construct($name, $sede, $dipendenti=0)
    {
        $this->name=$name; 
        $this->sede=$sede;
        $this->dipendenti=$dipendenti;
        self::$total += $this->get_spesatotale();
    }

    public function description ()
    {
        if($this->dipendenti)
        {
            return "L'ufficio` $this->name `con sede in` $this->sede `ha ben $this->dipendenti dipendenti. \n";
        }
        return  "L'ufficio $this->name con sede in $this->sede non ha dipendenti \n";
    }

    public function spesaCompany()
    {
        $tot=$this->dipendenti*1500*12;
        return "Il costo annuale dell'Uffici
        o $this->name è di $tot Euro \n";
    }
    public function get_spesatotale()
    {
        $tot=$this->dipendenti*1500*12;
        return $tot." \n";
    }

    public static function stampa_spesatotale()
    {
        return "L'azienda Aulab ha speso ". self::$total ." Euro \n ";
    }
}


// Esercizio 2

// Una volta definita la classe, istanziare 5 Sedi con i rispettivi dati e controllare che siano stati correttamente memorizzati con un var_dump();

echo Company::stampa_spesatotale();
$company1 = new Company('Apple', 'USA', 3);
echo Company::stampa_spesatotale();
$company2 = new Company('Barilla', 'ITA');
echo Company::stampa_spesatotale();
$company3 = new Company('Nintendo', 'JAP', 5);
echo Company::stampa_spesatotale();
$company4 = new Company('Nokia', 'FIN', 10);
echo Company::stampa_spesatotale();
$company5 = new Company('Xioami', 'CHI', 3);
echo Company::stampa_spesatotale();

// var_dump($company1);
// var_dump($company2);
// var_dump($company3);
// var_dump($company4);
// var_dump($company5);



// Esercizio 3

// Utilizzando la classe Azienda appena creata, creare e implementare un metodo in grado di stampare sul vostro terminale:
// `L'ufficio` `Apple` `con sede in` `USA` `ha ben 3 dipendenti.` 

// Altrimenti se i dipendenti sono 0 (valore di default) stampare:
// `L’ufficio $this->nome con sede in $this->sede non ha dipendenti` 

// echo $company1->description();
// echo $company2->description();
// echo $company3->description();
// echo $company4->description();
// echo $company5->description();

// Proseguendo con la classe appena creata Company,  implementare un nuovo metodo di calcolo che, per ogni oggetto Azienda Istanziato, calcoli la spesa annuale in euro con la formula
// numero dipendenti * (1500 * 12)
// e la stampi per ogni oggetto:

// $tot = $this->dipendenti * (1500 * 12); 

// echo "Il costo annuale dell'Ufficio $nome è di $tot Euro"
// e successivamente un metodo da richiamare di volta in volta (non nel costruttore, attenzione) in grado di calcolare  tutti i totali:
//     Il costo annuale dell'Ufficio $nome è di XXXXXX Euro
echo $company1->get_spesatotale();
echo $company2->get_spesatotale();
echo $company3->get_spesatotale();
echo $company4->get_spesatotale();
echo $company5->get_spesatotale();


// EXTRA - Esercizio 5

// Scrivere un programma utilizzando le funzioni che, data una stringa in input dal readline, conti quante vocali sono state inserite

//     //Esempio 
    
//     Aiuole = Nella parola "Aiuole" ci sono 5 vocali 
//     Alba = Nella parola "Alba" ci sono 2 vocali 
//     Fgrty = Nella parola "Fgrty" ci sono 0 vocali


// TIPS1: Ricordatevi di risolvere il codice PRIMA in maniera sequenziale e solo DOPO, applicando le 3 regole (Estrazione, Incapsulamento e Astrazione) suddividere il codice in piccole procedure:

// const VOCALI = ['a','e','i','o','u'];
// function conta_vocali ($string)
// {
//     $contatore_vocali=0;
//     // $string = strtolower($string);
//     for($i=0;$i<strlen($string);$i++)
//     {
//         foreach(VOCALI as $vocale)
//         {
//             if(strtolower($string[$i])==$vocale)
//             {
//                 $contatore_vocali++;
//             }
//         }
//         // // if(strtolower($string[$i])=='a' || strtolower($string[$i])=='e'|| strtolower($string[$i])=='i'|| strtolower($string[$i])=='o' || strtolower($string[$i])=='u')
//         // {
//         //     $contatore_vocali++;
//         // }
//     }
//     return $contatore_vocali;
// }

// $stringa= readline("Inserisci stringa: ");

// echo conta_vocali($stringa);




