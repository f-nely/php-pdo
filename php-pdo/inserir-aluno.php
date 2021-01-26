<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Vinicius Dias', new \DateTimeImmutable('1997-09-10'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?, ?)";
$stetement = $pdo->prepare($sqlInsert);
$stetement->bindValue(1, $student->name());
$stetement->bindValue(2, $student->birthDate()->format('Y-m-d'));

if ($stetement->execute()) {
    echo "Aluno incluido";
}
