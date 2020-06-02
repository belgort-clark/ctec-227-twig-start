<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');

$twig = new \Twig\Environment($loader, [
    'cache' => '/path/to/compilation_cache',
]);

$links = [
    ['url' => 'http://bruceelgort.com', 'title' => 'The website of Bruce Elgort', 'text' => 'Bruce Elgort'],
    ['url' => 'http://clark.edu', 'title' => 'Clark College website', 'text' => 'Clark College'],
    ['url' => 'http://elguji.com', 'title' => 'Elguji Software website', 'text' => 'Elguji Software']
];

$users = [
    ['name' => 'Bruce', 'age' => 55],
    ['name' => 'Gayle', 'age' => 57]
];

echo $twig->render('index.html', ['links' => $links, 'users' => $users]);
