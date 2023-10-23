<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Nos recettes</title>
    <style>
        header, header ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header ul {
            gap: 1rem;
        }

        ul {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <header>
        <h1>Recette</h1>

        <?php
        include 'partials/nav.php';
        ?>

    </header>


    <main>
        <?php
            include ("$name.view.php");
        ?>
    </main>


    <footer>
        <p>Fait en 2023</p>

        <div><a href="/conditions">Conditions et mentions légales</a></div>
    </footer>
</body>

</html>