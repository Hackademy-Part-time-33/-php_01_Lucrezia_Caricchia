<?php
/*TRACCIA 1
Definisci 4 variabili:
Integer, Float, String, Boolean. A schermo, fai comparire il tipo di dato delle varie variabili.
Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione. -->*/

$age = 25;
$height = 1.72;
$name = "Lucrezia";
$fromRome = true;

var_dump($age);
echo "\n";
var_dump($height);
echo "\n";
var_dump($name);
echo "\n";
var_dump($fromRome);

const age = 25;
const height = 1.72;
const name = "Lucrezia";
const fromRome = true;

var_dump(age);
echo "\n";
var_dump(height);
echo "\n";
var_dump(name);
echo "\n";
var_dump(fromRome);

/* TRACCIA 2
Date le seguenti variabili:
$1text = "Marco";
$text2 = "hai";
$text.3 = "sete";
$text4 = "?";
@text5 = "Perché";
$te-xt6 = '$text2';
$text 7 = 'bevuto';
$text8 = "tutto"
correggi eventuali errori e stampa correttamente a terminale la stringa: 
“Marco hai sete? Perché hai bevuto tutto.“

$1text = "Marco"; // Il nome della variabile non può contenere un numero all'inzio
$text2 = "hai"; //corretto
$text.3 = "sete"; //Il nome della variabile non può contenere punteggiatura
$text4 = "?";
@text5 = "Perché"; //Il nome della variabile deve sempre inziare col dollaro ($)
$te-xt6 = '$text2'; // Il nome della variabile può avere solo l'underscore (_) come carattere speciale. La variabile contenuta non è corretta. La variabile dovrebbe essere la stringa "sei".
$text 7 = 'bevuto'; //Il nome della variabile non può contenere spazi
$text8 = "tutto" //manca il punto e virgola finale;
*/


//CORRETTO:

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perché";
$text6 = 'sei';
$text7 = 'bevuto';
$text8 = "tutto";

$question = "$text1 $text2 $text3 $text4 $text5 $text6 $text7 $text8";

echo $question;


/*TRACCIA 3
Dati i seguenti array:

$words1 = ['una',67,'vita','colle','mi','rosso',['oscura','era', 89,['mezzo',
['cammin','Nel',['selva','la',['via','una',true,]],]],
'ritrovai','per'],'diritta'];

$words2 = [
 'elemento1' => 25.89,
 'elemento2' => 'nostra',
 'elemento3' => [
  'Virgilio',
  'smarrita',
  'ché'
 ]
];
Crea una variabile di tipo Stringa chiamata $results che stampi a terminale il seguente testo, attraverso l’accesso agli array sopra: 
“Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita“.

HINT:
Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo più opportuno: nuove variabili, concatenamenti, ecc ecc. */

$words1 = ['una',67,'vita','colle','mi','rosso',
['oscura','era', 89,
['mezzo',
['cammin','Nel',
['selva','la',
['via','una',true,]],]],
'ritrovai','per'],'diritta'];

$words2 = [
 'elemento1' => 25.89,
 'elemento2' => 'nostra',
 'elemento3' => [
  'Virgilio',
  'smarrita',
  'ché'
 ]
];

$results = $words1[6][3][1][1] ." ". $words1[6][3][0] ." del ". $words1[6][3][1][1] ." di ". $words2['elemento2'] ." ". $words1[2] ." ". $words1[4] ." ". $words1[6][4] ." ". $words1[6][5]." ".$words1[0] ." ". $words1[6][3][1][2][0] ." ". $words1[6][0] . " , " . $words2['elemento3'][2] ." ". $words1[6][3][1][2][1] ." ". $words1[7] ." ". $words1[6][3][1][2][2][0] ." ". $words1[6][1] ." ". $words2['elemento3'][1];

echo $results;
?>
