<?php

declare(strict_types=1);

phpinfo();

$pdo = new PDO('mysql:dbname=root;host=mariadb;port=3306','root', 'root',[
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]);

var_dump($pdo->query('SELECT * FROM test')->fetchAll());