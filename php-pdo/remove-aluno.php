<?php

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?');
$preparedStatement->bindValue(1, 3, PDO::PARAM_INT);

var_dump($preparedStatement->execute());

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?');
$preparedStatement->bindValue(1, 4, PDO::PARAM_INT);

/*
 * o PHP recomenda que você envie os dados como string (PDO::PARAM_STR),
 * que é o tipo padrão, e o banco tratará esses tipos.
 */
