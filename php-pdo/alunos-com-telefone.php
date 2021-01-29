<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);

/** @var $studentList*/
$studentList = $repository->studentsWithPhones();

/*echo $studentList[1]->phones()[0]->formattedPhone();*/
var_dump($studentList);