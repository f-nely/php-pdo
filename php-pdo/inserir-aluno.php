<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$student = new Student(null, 'Elton Mineto', new \DateTimeImmutable('1978-04-28'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date)";
$stetement = $pdo->prepare($sqlInsert);
$stetement->bindValue('name', $student->name());
$stetement->bindValue('birth_date', $student->birthDate()->format('Y-m-d'));

if ($stetement->execute()) {
    echo "Aluno incluido";
}
