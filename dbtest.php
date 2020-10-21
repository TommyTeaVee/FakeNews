<?php

$database = 'sqlite:/' . __DIR__ . '/fakenews.sqlite';
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($database, '', '',  $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
};

$stmt = $pdo->query('SELECT * FROM posts');
$article = $stmt->fetchAll();




/* TODO
    - New table for article items
    - Fix id, name array
    */
