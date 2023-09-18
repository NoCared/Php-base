<?php

// // if/else/else if / comparaison

// $heure = 23;

// // Afficher on est le matin lorsque l'heure est inférieur à 12h et on est le soir quand l'heure est supérieure à 18h

// if ($heure < 12)
// {
//     echo "On est le matin";
// }
// else if ($heure > 18)
// {
//     echo "On est le soir";
// }




// // ==     et      !=
// // égal en valeur

// $x = '5';
// if ($x == 5)
// {
//     echo "bla";
// }
// // "bla"


// // ===     et    !==
// // -> égal en type et en valeur
// $x = '5';
// if ($x === 5)
// {
//     echo "bla";
// }
// // "rien"




// //Variante if elseif
// $choix = false;
// if ($choix):
//     echo "vrai";
// else:
//     echo "Faux";
// endif;




$couleur = 'red';

$return_value = match($couleur){
    'red' => 'couleur est le rouge',
    'green' => 'couleur est le vert',
    'blue' => 'couleur est le bleu',
};
echo $return_value;