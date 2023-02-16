<?php

require_once 'vendor/autoload.php';


use App\classes\Statement;
use App\classes\Student;

//$statement = new Statement();
//$statement->index();

$student = new Student();
$students = $student->getAllStudents();
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
    <table border="1" width="1200">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
        </tr>

        <?php   foreach ($students as $student){

        ?>
        <tr align="center">
            <td><?php echo $student['name']  ?></td>
            <td><?php echo $student['email']  ?></td>
            <td><?php echo $student['phone']  ?></td>
            <td><?php echo $student['address']  ?></td>
            <td><?php echo $student['city']  ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
