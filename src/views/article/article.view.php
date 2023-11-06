<h3><?= $model['article']['titre'] ?></h3>
<p><?= $model['article']['contenu'] ?></p>
<p>Crée le : <?= $model['article']['created_at'] ?></p>
<p>Publié par : <?= $model['article']['nom'] ?></p>

<p>
    | 
    <a href="/article-modify?id=<?= $model['article']['id'] ?>" 
    onClick="return confirm('Etes-vous certain de modifier cet article')">
        Modifier cet article
    </a>
    | --------- | 
    <a href="/article-delete?id=<?= $model['article']['id'] ?>" 
    onClick="return confirm('Etes-vous certain de supprimer cet article')">
        Supprimer cet article
    </a>
     | 
</p>


<p><a href="/articles">Retour à la liste des articles</a></p>