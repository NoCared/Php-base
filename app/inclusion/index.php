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
    //include('./header.php');
    //include('./footer.php');

    //require -> génere une erreur mais continue PAS le process
    require('./header.php');
    require('./footer.php');

    ?>

</body>


</html>