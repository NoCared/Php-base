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
// // echo "<pre>";
// // print_r( $tableau);
// // echo "</pre>";

// echo "<pre>";
// var_dump( $tableau);
// echo "</pre>";




echo "Test";
die();
echo "Test2";