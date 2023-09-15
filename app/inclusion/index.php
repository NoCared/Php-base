<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusion</title>
</head>



<body>

    <?php
    ////include -> génere une erreur mais continue le process
    //include('./partials/header.php');
    //include('./partials/footer.php');
    //include_once('./partials/header.php')

    //require -> génere une erreur mais continue PAS le process
    // require('./partials/header.php');
    // require('./partials/footer.php');
    //require_once('./partials/footer.php');

    
    include('./partials/header.php');

    ?>
    <main>
        <section>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta harum reiciendis, cum repudiandae velit placeat aut nihil tempore quidem libero molestias odio praesentium perspiciatis ipsa voluptatum in qui saepe illo!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta harum reiciendis, cum repudiandae velit placeat aut nihil tempore quidem libero molestias odio praesentium perspiciatis ipsa voluptatum in qui saepe illo!
            </p>
        </section>
    </main>

    <?php
    include('./partials/footer.php');

    ?>
</body>


</html>