<?php
require 'models/Database.php';

$db = new Database();

$id = $_GET['id'];

$queryArticle = 'DELETE FROM post where id = :id';

$article = $db->query($queryArticle, [':id' => $id]);

if (! $article) {
    abort();
}

header('Location: /articles');
exit();