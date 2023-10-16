<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main>
        <h1>Formulaire</h1>

        <form action="./traitement.php" method="POST">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom">
            </div>

            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label for="titre">Titre :</label>
                <input type="text" name="titre" id="titre">
            </div>

            <div>
                <label for="commentaire">Commentaire :</label>
                <textarea name="commentaire" id="commentaire" cols="30" rows="10"></textarea>
            </div>

            <div>
                <label for="competences">Compétences</label>
                <input type="checkbox" name="competence[]" value="php" id="php">PHP
                <input type="checkbox" name="competence[]" value="python" id="python">PYTHON
                <input type="checkbox" name="competence[]" value="html" id="html">HTML
            </div>

            <div>
                <label for="niveau">Niveau</label>
                <input type="radio" name="niveau" id="debutant" value="debutant">Débutant
                <input type="radio" name="niveau" id="intermediaire" value="intermediaire">Intermédiaire
                <input type="radio" name="niveau" id="expert" value="expert">Expert
            </div>

            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </main>
</body>

</html>