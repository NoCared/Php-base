<?php

// ------------------------------------- DOCUMENTATION -----------------------------------------
//https://www.php.net/docs.php

// ---------------------------------------------------------------------------------------------

// echo "test";

//Balise fermante de php pour pouvoir faire du html par la suite
?>

<!-- <h1> php </h1> -->







<!-- ----------------------------------------------------------------------------------- -->

<!-- Si on veut refaire du php on rouvre une balise php -->
<?php



//On déclare une variable avec $                      -> faire attention à la casse
$variable = 'Une variable';

$Variable = 'Une autre variable';

////     Affichage des variables
// echo $variable;
// echo '<br>';
// echo $Variable;




// //DIfférentes façons d'écrire le résultat
//$nb = '5';
// echo $nb;
//  echo '<br>';
// printf($nb);
//  echo '<br>';
// var_dump($nb);




// //Var dump affiche le type de la variable
// $nb = 5;
// var_dump($nb);




//// Déclaration variable
// $nb = (string) '5';
// $nb = (int) '5';
// $nb = (float) '5';
// $nb = (bool) '5';
// var_dump($nb);




// $camelCase = 'Une variable en camelCase';
// $snake_case = 'Une variable en snake_case';
// $PascalCase = 'Une variable en PascalCase';




// // Le point permet de concacténer des chaines de caractères
// $fruit1 = 'pomme';
// $fruit2 = 'banane';
// echo "$fruit1" . "$fruit2";
// echo '<br>';
// echo "$fruit1" . " " . "$fruit2";
// echo '<br>';
// echo "<p>$fruit1" . " " . "$fruit2</p>";
// echo '<br>';
// echo "<p>$fruit1" . "<br>" . "$fruit2</p>";




// //operateur devant l'égal
// $resultat = 'bla';
// $resultat .= 'blo';
// echo $resultat;





// -------------------------- HTML avec du PHP à l'intérieur  ---------------------------------

//$titre = "Les fruits";
?>

<!-- <h2><?php echo $titre ?></h2>
<h2><?= $titre ?></h2> -->







<?php

// $data1 = "Hello";
// $data2 = "planete";
// $data3 = "Mars";
// $data4 = "les terriens";

// // Afficher la phrase suivante dans un paragraphe : 
// // Hello, les terriens. Je viens de la planete Mars.

// $result = "<p>" . $data1 . ', ' . $data4 . ". Je viens de la " . $data2 . ' ' . $data3 . ".</p>";
// echo $result;





// //print_r et var_dump affiche les éléments du tableau
// $tableau = ['groupe', 34, 5.78, false, [1,2,3]];
// echo "<pre>";
// print_r( $tableau);
// echo "</pre>";

// echo "<pre>";
// var_dump( $tableau);
// echo "</pre>";




// $client = 'Jane Done';
// $formation = 'Architecte';

// echo "$client suit une formation de $formation";



// //Permet de kill le process
// echo "Test";
// die();
// echo "Test2";





// // Constantes
// define('USER','Jon Doe');
// echo USER;

// define('TABLEAU', ['client',4,true,4.8]);
// var_dump(TABLEAU);





////Variables superglobales
//var_dump($GLOBALS);
//var_dump($_SERVER);




// // Operateurs
// // + - * / %
// // ** existe aussi et veut dire puissance
// $x = 4;
// $y = 2;
// $z = 5;

// $calcul =$y ** $x;
// echo $calcul;





// // Creer 2 variables prixht et tva
// // Afficher le calcul du prix ttc

// function CalcPrixTTC(float $num,float $tva) : float 
// {
//     $num += $num * $tva/100;
//     return $num;
// }

// $prixht = 34;
// $tva = 10;

// echo CalcPrixTTC($prixht,$tva);





// Calculer l'age d'une personne en fonction de son année de naissance
//En utilisant la fonction date

// $annee = 2023;

// $age = date("Y") - $annee;
// echo $age;

// echo "<br>";

// $age = mktime(0,0,0,0,0,$annee);
// $current = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("y"));
// $age = $current - $age;
// $year = intdiv($age, 31536000);
// $age -= $year * 31536000;
// echo "Annees : $year <br>";
// $month = intdiv($age, 2629800 );
// $age -= $month * 2629800 ;
// echo "Mois : $month <br>";
// $week = intdiv($age, 604800);
// $age -= $week * 604800;
// echo "Semaines : $week <br>";
// $day = intdiv($age, 86400);
// $age -= $day * 86400;
// echo "Jours : $day <br>";
// $hour = intdiv($age, 3600);
// $age -= $hour * 3600;
// echo "Heures : $hour <br>";
// $min = intdiv($age ,60);
// $age -= $min * 60;
// echo "Minutes : $min <br>";
// echo "Seconds $age";




