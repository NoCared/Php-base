<?php


// $routes = [
//     '/' => 'controllers/index.php',
//     '/articles' => 'controllers/articles.php',
//     '/article' => 'controllers/article.php',
//     '/contact' => 'controllers/contact.php'
// ];


return [
    '/' => 'controllers/index.php',
    '/articles' => 'controllers/article/articles.php',
    '/article' => 'controllers/article/article.php',
    '/article-new' => 'controllers/article/article-new.php',
    '/article-delete' => 'controllers/article/article-delete.php',
    '/article-modify' => 'controllers/article/article-modify.php',
    '/contact' => 'controllers/contact.php',
    '/conditions' => 'controllers/conditions.php',
    '/dashboard' => 'controllers/admin/dashboard.php'
];
