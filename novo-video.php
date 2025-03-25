<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$sql = 'INSERT INTO videos (url, title) VALUES (?, ?)';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $_POST['url']);
$statement->bindValue(2, $_POST['titulo']);

$statement->execute();
