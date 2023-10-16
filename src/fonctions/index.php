<?php

//Sert à provoquer des erreurs si le typage n'est pas bon
declare(strict_types=1);

function debug($value)
{
    echo '<pre style="background-color:black; color:white;padding:15px;overflow:auto;">';
    print_r($value);
    echo '</pre>';
}

function dd($value)
{
    debug($value);
    die("----------------------------------- Stop function -----------------------------------");
}

function calcul(int $a, int $b): int
{
    return $a + $b;
}

function calculAdd(int $a, int $b = 5): int
{
    return $a + $b;
}

// echo calcul(10, 12) . "<br>";
// echo calculAdd(10) . "<br>";

//----------


//Faire une fonction qui calcule l'age d'une personne en lui passant la date de naissance
//Faire une fonction qui calcule le prix TTC en lui passant le prix HT et la TVA
function AgeSomeone(int $date) : int
{
    return date("Y") - $date;
}
function CalcPrixTTC(float $ht,float $tva) : float 
{
    return $ht + $ht * $tva/100;
}

// echo AgeSomeone(1999) . '<br>';
// echo CalcPrixTTC(34,10);


//----------


// // fonction interne à php
// $article = "Je lis un article.";


// //Inverser chaine de caractères
// //strrev

// //Longueur d'une chaine de caractère
// //strlen

// //Transforme une chaine de caractère en majuscule
// //strtoupper

// //Remplace un élément dans une chaine de caractère
// // ----> remplace 'un' par 'cet'
// //str_replace

// //Remplace un segment dans une chaine de caractère
// // ----> renvoyer les 6 premiers éléments de la chaine de caractère
// //substr

// $article = str_replace('un','cet',$article,$count);

// echo $article . " " . $count . "<br>";

// $article = substr($article,0,6);

// echo $article . "<br>";


//---------------

// $x = 5;
// $y =3;

// function calcul2(int $x) :int
// {
//     global $y;
//     $y = 7;
//     return $x + $y;
// }
// // echo calcul2(5);
// // dd($y);

// global $z;
// $z = 'Le monde';
// echo "hello " . $GLOBALS['z'];