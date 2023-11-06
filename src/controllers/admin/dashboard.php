<?php
require 'models/Database.php';

$db = new Database();
$articles = $db->query('SELECT * FROM post ORDER BY id DESC')->findAll();

$heading = 'Dashboard';

view('admin/dashboard',[
    'heading' => $heading,
    'articles' => $articles
]);