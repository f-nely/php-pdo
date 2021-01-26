<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Vinicius Dias', new \DateTimeImmutable('1997-10-15'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date)";
$stetement = $pdo->prepare($sqlInsert);
$stetement->bindValue('name', $student->name());
$stetement->bindValue('birth_date', $student->birthDate()->format('Y-m-d'));

if ($stetement->execute()) {
    echo "Aluno incluido";
}
