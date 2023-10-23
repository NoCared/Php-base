<?php
require 'models/Database.php';
$db = new Database();
$heading = 'Nouvelle recette';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);
    if (strlen($titre) === 0 ) {
        $errors[] = 'Champ titre vide';
    }
    if (strlen($contenu) === 0)
    {
        $errors[] = 'Champ contenu vide';
    }

    if (empty($errors)) {

        $db->query('INSERT INTO post (titre, contenu) VALUES (:titre, :contenu)', [
            'titre' => $titre,
            'contenu' => $contenu
        ]);

        header('Location: /articles');
        exit();
    }
}


view('article-new', [
    'heading' => $heading,
    'errors' => $errors
]);
