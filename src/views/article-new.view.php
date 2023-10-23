<h2><?= $model['heading']?></h2>
<section>
    <form method="POST">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre">
        <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
        <input type="submit" value="Ajouter">
    </form>
</section>