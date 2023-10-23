<?php
require 'models/Database.php';
$db = new Database();
$heading = 'Nouvelle recette';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = filter_var($_POST['titre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $contenu = filter_var($_POST['contenu'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (empty($titre) || empty($contenu)) {
        echo 'Champ titre ou contenu vide';
    } else {
        $db->query('INSERT INTO post (titre, contenu) VALUES (:titre, :contenu)', [
            'titre' => $titre,
            'contenu' => $contenu
        ]);

        header('Location: /articles');
        exit();
    }
}


view('article-new', [
    'heading' => $heading
]);
