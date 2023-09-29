<?php
include '../fonctions/index.php';

//debug($_POST);
//echo "Votre email est " . $_POST['email'];

// $returnValue = "<ul>Vos infos sont :";

// foreach ($_POST as $value)
// {
//     $returnValue .= "<li>" . $value . "</li>";
// }
// $returnValue .= "</ul>";
// echo $returnValue;




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    debug($_POST);

    $returnValue = "<ul>Vos infos sont :";

    foreach ($_POST as $key => $value) {
        $returnValue .= "<li>" . $key . " : " . $value . "</li>";
    }
    $returnValue .= "</ul>";
    echo $returnValue;

} else {
    die('Validation echouée');
}


?>