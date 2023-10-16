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

        if (is_array($value)) {
            $value = implode(',', $value);
        }
        $returnValue .= "<li>" . $key . " : " . $value . "</li>";
    }
    $returnValue .= "</ul>";
    echo $returnValue;
} else {
    die('Validation echouée');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main>

        <ul>Vos infos sont :
            <?php foreach ($_POST as $key => $value) { ?>
                <li>
                    <?= $key?> : <?= is_array($value) ? implode(',',$value) : $value ?>
                </li>
            <?php } ?>   
        </ul>
    </main>
</body>

</html>