<?php

include_once "Student.php";
include_once "StudentsManager.php";
$studentManager = new StudentsManager("data.json");
$students = $studentManager->getAllStudent();

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
<style>
    table{
        text-align: center;
    }
    td{
        width:100px;
    }
    button{
        width:50px;
        height:30px;
    }
</style>
<body>
<div class="container">
    <table border="1px">
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>dob</td>
            <td>age</td>
            <td>math</td>
            <td>physic</td>
            <td>chemistry</td>
            <td>Average</td>
            <td colspan="2">Editor</td>
        </tr>
        <?php foreach ($students as $key => $student){ ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $student->getName(); ?></td>
            <td><?php echo $student->getDob(); ?></td>
            <td><?php echo $student->getAge(); ?></td>
            <td><?php echo $student->getMath(); ?></td>
            <td><?php echo $student->getPhysic(); ?></td>
            <td><?php echo $student->getChemistry(); ?></td>
            <td><?php echo $student->avg(); ?></td>
            <td><a href="delete.php?id=<?php echo $key ?>">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $student->getId() ?>">Edit</a></td>
        </tr>
        <?php } ?>
        <button><a href="add.php">Add</a></button>
    </table>
</div>
</body>
</html>

