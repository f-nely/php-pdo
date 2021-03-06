<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);


try {
    $connection->beginTransaction();
    $aStudent = new Student(
        null,
        'Nikita Popov',
        new DateTimeImmutable('1985-05-01')
    );
    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'Sergio Lopes',
        new DateTimeImmutable('1975-10-28')
    );
    $studentRepository->save($anotherStudent);

    $connection->commit();
} catch (PDOException $exception) {
    echo $exception->getMessage();
    $connection->rollBack();
}

