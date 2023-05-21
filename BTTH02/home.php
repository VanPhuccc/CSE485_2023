<?php
require 'include/DBconnect.php'; 
require 'include/function.php';
$sql = "Select *from students";
$students = pdo($pdo,$sql)->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
<body>
<div class = "container">
    <h3 style="font-family:serif;text-align:center">Students List </h3>

</div>

<table class="table table-bordered text-center" style="font-family:monospace;" >
  <thead>
    <tr class="text-white" style="background-color:#7393B3">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Birthday</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col" style="color:lightgreen">Edit</th>
      <th scope="col" style="color:red">Remove</th>
    </tr>
  </thead>
  <thead>
    <tr>
    <?php
      foreach($students as $students)
      {
    ?>
      <th><?php echo $students['sv_id']; ?></th>
      <th><?php echo $students['sv_name']; ?></th>
      <th><?php echo $students['sv_bdate']; ?></th>
      <th><?php echo $students['gender']; ?></th>
      <th><?php echo $students['sv_email']; ?></th>
      <th><?php echo $students['sv_phone']; ?></th>
      <td>
        <a href="editStudent.php"><i class="bi bi-pencil-square"></i></a>
      </td>
      <td>
        <a href="removeStudent.php"><i class="bi bi-file-earmark-x"></i></a>
      </td>
    </tr>
    <?php
      }
    ?>
  </thead>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>

