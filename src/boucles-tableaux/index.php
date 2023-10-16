<?php
require '../fonctions/index.php';
require '../data/villes.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>

<body>
    <?php
    // $jsonListEmployees = file_get_contents('../data/employees.json');

    // $jsonListEmployeesArray = json_decode($jsonListEmployees, true);
    // debug($jsonListEmployeesArray);

    // foreach($jsonListEmployeesArray['data'] as $key => $value)
    // {
    //     echo "<ul>Number $key:<br>";
    //     echo "<li>Name " . $value['employee_name'] . '</li>';
    //     echo "<li>Salary " . $value['employee_salary'] . '</li>';
    //     echo "<li>Age " . $value['employee_age'] . '</li>';
    //     echo '</ul><br>';
    // }

    // //Manière avec les classes eheheh
    // $jsonListEmployeesArray = json_decode($jsonListEmployees);
    // foreach($jsonListEmployeesArray->data as $key => $value)
    // {
    //     echo "<ul>Number $key:<br>";
    //     echo "<li>Name " . $value->employee_name . '</li>';
    //     echo "<li>Salary " . $value->employee_salary . '</li>';
    //     echo "<li>Age " . $value->employee_age . '</li>';
    //     echo '</ul><br>';
    // }







    function filterByName($villes, $name)
    {
        $filterVilles = [];
        foreach ($villes as $ville) {
            if ($ville['nom'] === $name)
            {
                $filterVilles[] = $ville;
            }
        }
        return $filterVilles;
    }
    ?>


    <ul>
        <!-- --------------------- AFFICHER TOUTES LES VILLES --------------------- -->
        <!-- <?php foreach ($villes as $ville) { ?>
            <li>
                <a href="<?= $ville['siteWeb'] ?>"><?= $ville['nom'] ?> </a>

            </li>
        <?php } ?> -->



        <!-- --------------------- AFFICHER LES VILLES AYANT LE NOM PARIS --------------------- -->
        <?php foreach (filterByName($villes,'Paris')as $ville){  ?>
            <li>
                <a href="<?= $ville['siteWeb'] ?>"><?= $ville['nom'] ?> </a>

            </li>
        <?php }?>
    </ul>
</body>

</html>