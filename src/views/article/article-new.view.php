<h2><?= $model['heading'] ?></h2>
<section>
    <form method="POST">
        <label for="titre">Titre :</label>


        <input type="text" name="titre" id="titre">


        <textarea name="contenu" id="contenu" cols="30" rows="10"><?php if (isset($model['contenu'])) { ?><?= $model['contenu'] ?><?php } ?> </textarea>

        <label for="user">Auteur :</label>
        <select name="user" id="user">
            <option value="">---</option>
            <?php foreach ($model['users'] as $user) { ?>
            <option value="<?=$user['id']?>"><?=$user['nom']?></option>
            <?php } ?>
        </select>

        <input type="submit" value="Ajouter">
    </form>

    <p>
        <?php if (isset($model['errors']) && !empty($model['errors'])) {
            foreach ($model['errors'] as $error) { ?>

    <p class="error">
        <?= $error ?>
    </p>

<?php }
        } ?>
</p>
</section>