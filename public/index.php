<?php

declare(strict_types=1);


phpinfo();

/*$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/', function ($request, $response, $args) {});

$app->get('/test', function ($request, $response, $args) {
    var_dump($response);
});

// Run app
$app->run();*/



// проверка работы баз данных

$mariadb = new PDO('mysql:dbname=root;host=mariadb;port=3306','root', 'root',[
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]);

//var_dump($mariadb->query('SELECT VERSION()')->fetchAll());

/*$mysql = new PDO('mysql:dbname=root;host=mysql;port=3306','root', 'root',[
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]);

var_dump($mysql->query('SELECT VERSION()')->fetchAll());

$postgres = new PDO('pgsql:host=postgres;port=5432;dbname=root','root', 'root',[
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]);

var_dump($postgres->query('SELECT VERSION()')->fetchAll());*/