<?php
require 'models/Database.php';
$db = new Database();
$heading = 'Nouvelle recette';

$errors = [];
$titre = '';
$contenu = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);
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
    'titre' => $titre,
    'contenu' => $contenu,
    'errors' => $errors
]);
