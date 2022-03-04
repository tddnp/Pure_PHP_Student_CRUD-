<?php

include_once "Student.php";
include_once "StudentsManager.php";

$studentManager = new StudentsManager("data.json");
$students = $studentManager->loadDataFile();

array_splice($students,$_GET["id"],1);

$studentManager->saveDataFile($students);

header("location:index.php");