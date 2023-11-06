<h2><?= $model['heading'] ?></h2>

<section>

    <table>

        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($model['articles'] as $key => $article) : ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $article['id'] ?></td>
                <td><?= $article['titre'] ?></td>
                <td><?= substr_replace($article['contenu'],'(...)',40,-1)  ?></td>


                <td>
                    <span>
                        <a href="/article?id=<?= $article['id'] ?>">
                            Voir
                        </a>
                    </span>

                    <span>
                    <a href="/article-modify?id=<?= $article['id'] ?>" onClick="return confirm('Voulez vous modifier cet article ?')">
                        Modifier
                    </a>
                    </span>

                    <span>
                    <a href="/article-delete?id=<?= $article['id'] ?>" onClick="return confirm('Etes-vous certain de supprimer cet article')">
                        <span class="redCross">
                            <img src="public/assets/image/delete.png" alt="">
                        </span>
                    </a>
                    </span>

                </td>


            </tr>
        <?php endforeach; ?>

    </table>

</section>