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



// $numbers = [2,3,4,5];

// debug($numbers);

// foreach ($numbers as $number)
// {
//     $number *= 3;
//     echo "$number <br>";
// }


// //Passage par référence

// foreach ($numbers as &$number)
// {
//     $number *= 3;
// }

// debug($numbers);



//////////////////////////////////////



$user = [
    'name' => 'Jane Doe',
    'email' => 'janedoe@gmail.com',
    'skills' => ['php', 'javascript', 'python']
];

//Afficher le tableau de skills

foreach ($user as $key => $value) {

    //Autre manière de check si la value est un tableau
    if ((array)$value === $value)
    {
        echo "ICIIII";
    }

    if (is_array($value)) {
        //Façon 1
        echo "$key : " . implode(", ", $value) . "<br>";
        //Façon 2
        $value = json_encode($value);
    } 
    echo "$key : $value <br>";
    
}

