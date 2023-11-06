<?php
require 'models/Database.php';

$db = new Database();

$id = $_GET['id'];

$queryArticle = 'SELECT * FROM post INNER JOIN user ON post.user_id = user.id where post.id = :id';

$article = $db->query($queryArticle, [':id' => $id])->find();

if (! $article) {
    abort();
}

view('article/article',[
    'article' => $article
]);
