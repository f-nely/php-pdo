<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students');
var_dump($statement->fetchColumn(1));
exit();
$studentList = [];


foreach ($studentDatatList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'], new \DateTimeImmutable($studentData['birth_date']));
}









