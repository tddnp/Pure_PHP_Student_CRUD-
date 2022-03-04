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
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>date of birth</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>Math</td>
                <td><input type="number" name="math"></td>
            </tr>
            <tr>
                <td>Physic</td>
                <td><input type="number" name="physic"></td>
            </tr>
            <tr>
                <td>Chemistry</td>
                <td><input type="number" name="chemistry"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Save" href="index.php" ></td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    include_once "Student.php";
    include_once "StudentsManager.php";

    $id=$_POST["id"];
    $name=$_POST["name"];
    $dob=$_POST["dob"];
    $age=$_POST["age"];
    $math=$_POST["math"];
    $physic=$_POST["physic"];
    $chemistry=$_POST["chemistry"];

    $data=[
        "name"=>$name,
        "dob"=>$dob,
        "age"=>$age,
        "math"=>$math,
        "physic"=>$physic,
        "chemistry"=>$chemistry
    ];

    $studentManager = new StudentsManager("data.json");
    $studentManager->add($data);

    header("location:index.php");
}