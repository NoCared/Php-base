<?php
require '../fonctions/index.php';
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
        $jsonListEmployees = file_get_contents('../data/employees.json');

        $jsonListEmployeesArray = json_decode($jsonListEmployees, true);
        debug($jsonListEmployeesArray);

        foreach($jsonListEmployeesArray['data'] as $key => $value)
        {
            echo "<ul>Number $key:<br>";
            echo "<li>Name " . $value['employee_name'] . '</li>';
            echo "<li>Salary " . $value['employee_salary'] . '</li>';
            echo "<li>Age " . $value['employee_age'] . '</li>';
            echo '</ul><br>';
        }

        //Manière avec les classes eheheh
        $jsonListEmployeesArray = json_decode($jsonListEmployees);
        foreach($jsonListEmployeesArray->data as $key => $value)
        {
            echo "<ul>Number $key:<br>";
            echo "<li>Name " . $value->employee_name . '</li>';
            echo "<li>Salary " . $value->employee_salary . '</li>';
            echo "<li>Age " . $value->employee_age . '</li>';
            echo '</ul><br>';
        }


    ?>
</body>

</html>