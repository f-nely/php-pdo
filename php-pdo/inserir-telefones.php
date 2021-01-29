<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$pdo->exec("INSERT INTO phones (area_code, number, student_id) VALUES ('68', '992029121', 6), ('68', '406643291', 6);");




