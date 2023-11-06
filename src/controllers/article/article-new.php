<?php
require 'models/Database.php';
$db = new Database();
$heading = 'Nouvelle recette';

$usersRequest = 'SELECT * FROM user';
$users = $db->query($usersRequest)->findAll();

$errors = [];
$titre = '';
$contenu = '';

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

        $db->query('INSERT INTO post (titre, contenu, user_id) VALUES (:titre, :contenu, :user_id)', [
            'titre' => $titre,
            'contenu' => $contenu,
            'user_id' => $user
        ]);

        header('Location: /articles');
        exit();
    }
}


view('article/article-new', [
    'heading' => $heading,
    'titre' => $titre,
    'contenu' => $contenu,
    'errors' => $errors,
    'users' => $users
]);
