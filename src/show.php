<?php
include './fonctions.php';
require './Database.php';

$db = new Database();

$id = $_GET['id'];

$queryArticle = 'SELECT * FROM post where id = :id';

$article = $db->query($queryArticle, [':id' => $id])->fetch();

include './views/show.view.php';
