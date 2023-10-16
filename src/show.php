<?php

require './database.php';

$db = new Database();
$id = $_GET['id'];

$queryArticle = 'SELECT * from post where id=' . $id;

$article = $db->query($queryArticle)->fetch();


require './views/show.view.php';
