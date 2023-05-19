<?php
    require 'include/DBconnect.php'; 
    require 'include/function.php';
    $sql = "Select *from students limit 15";
    $students = pdo($pdo,$sql)->fetchAll();

    // echo "<pre>";
    // print_r($students);
    // echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
</head>
<body>
    


</body>
</html>