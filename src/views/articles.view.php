
<h2><?= $model['heading'] ?></h2>

<section>
    <ul>
        <?php foreach ($model['articles'] as $article) : ?>
            <li><a href="/article?id=<?= $article['id'] ?>"><?= $article['titre'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</section>