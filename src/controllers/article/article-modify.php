<?php
require 'models/Database.php';
$db = new Database();

$id = $_GET['id'];
$usersRequest = 'SELECT * FROM user';
$users = $db->query($usersRequest)->findAll();

$queryArticle = 'SELECT * FROM post where id = :id';

$article = $db->query($queryArticle, [':id' => $id])->find();

if (! $article) {
    abort();
}

$heading = 'Modification recette : ' . $article['titre'];

$errors = [];
$titre = $article['titre'];
$contenu = $article['contenu'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);
    $user = cleanData($_POST['user']);
    if (strlen($titre) === 0 ) {
        $errors[] = 'Champ titre vide';
    }
    else if (strlen($titre) >= 50)
    {
        $errors[] = 'Champ de titre trop grand';
    }

    if (strlen($contenu) === 0)
    {
        $errors[] = 'Champ contenu vide';
    }
    else if (strlen($contenu) >= 1000)
    {
        $errors[] = 'Champ contenu dépasse les 1000 caractères';
    }

    if (empty($errors)) {
        $db->query('UPDATE post SET titre = :titre, contenu = :contenu, user_id = :user WHERE id = :id', [
            'titre' => $titre,
            'contenu' => $contenu,
            'id' => $id,
            'user' => $user
        ]);

        header('Location: /articles');
        exit();
    }
}


view('article/article-modify', [
    'heading' => $heading,
    'titre' => $titre,
    'contenu' => $contenu,
    'errors' => $errors,
    'creator' => $article['user_id'],
    'users' => $users
]);
