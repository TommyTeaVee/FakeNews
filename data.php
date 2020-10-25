<?php

declare(strict_types=1);

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
$articles = $stmt->fetchAll();

function sortFunction($a, $b)
{
    return strtotime($a["published"]) - strtotime($b["published"]);
}

usort($articles, "sortFunction");
$articles = array_reverse($articles);





// This is the file where you can keep your data arrays such as articles and
// authors.

// Both the authors and the news feed items should be stored in 
// arrays in a structure that's simple to use in your code and that's
//  easily understandable.
//  The authors and news feed items don't have to be within the same array 
//  but some sort of connection should exist between a news feed item and it's author. 
//  The news feed items should be ordered based on the published date,
//  so the latest news feed item should go on top and vice versa.