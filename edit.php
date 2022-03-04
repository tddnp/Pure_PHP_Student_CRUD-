<?php

include_once "StudentsManager.php";
include_once "Student.php";

$studentManager = new StudentsManager("data.json");
$student = $studentManager->getStudentById($_GET["id"]);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div>
        <h2>Add student</h2>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $student->getName()?>"></td>
            </tr>
            <tr>
                <td>date of birth</td>
                <td><input type="date" name="dob" value="<?php echo $student->getDob()?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age" value="<?php echo $student->getAge()?>"></td>
            </tr>
            <tr>
                <td>Math</td>
                <td><input type="number" name="math" value="<?php echo $student->getMath()?>"></td>
            </tr>
            <tr>
                <td>Physic</td>
                <td><input type="number" name="physic"value="<?php echo $student->getPhysic()?>"></td>
            </tr>
            <tr>
                <td>Chemistry</td>
                <td><input type="number" name="chemistry"value="<?php echo $student->getChemistry()?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Save" href="index.php"></td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST["name"];
    $dob=$_POST["dob"];
    $age=$_POST["age"];
    $math=$_POST["math"];
    $physic=$_POST["physic"];
    $chemistry=$_POST["chemistry"];

    $data=$studentManager->loadDataFile();

    foreach($data as $item){
        if($item->id==$_GET["id"]){
            $item->name=$name;
            $item->dob=$dob;
            $item->age=$age;
            $item->math=$math;
            $item->physic=$physic;
            $item->chemistry=$chemistry;
        }
    }

    $studentManager->saveDataFile($data);

    header("location:index.php");
}
