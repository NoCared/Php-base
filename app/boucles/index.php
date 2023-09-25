<?php
require '../fonctions/index.php';


// $planetes = ['mars', 'uranus', 'jupiter', 'terre', 'saturne'];

// debug($planetes);

// foreach ($planetes as $planete) {
//     echo "$planete<br>";
// }

// echo '<br>';

// foreach ($planetes as $key => $planete) {
//     echo "$key : $planete<br>";
// }

// echo '<br>';

// for ($it = 0; $it < count($planetes);$it++)
// {
//     echo "$planetes[$it] <br>";
// }

// echo '<br>';

// $it = 0;
// while ($it < count($planetes))
// {
//     echo "$planetes[$it] <br>";
//     $it++;
// }

// echo '<br>';

// array_walk($planetes,function ($element){echo "$element<br>";} );


/////////////////////////////////////


$numbers = [2,3,4,5];

debug($numbers);

foreach ($numbers as $number)
{
    $number *= 3;
    echo "$number <br>";
}


