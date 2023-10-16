<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>

<body>

</body>

</html>

<ul>
    <?php foreach ($articles as $article) { ?>
        <li>
            <a href="show.php?id=<?= $article['id'] ?>">
                <?= $article['titre'] ?>
            </a>
        </li>

        <!-- <li> 
                <?= $article['contenu'] ?>
        </li> -->
    <?php } ?>
</ul>