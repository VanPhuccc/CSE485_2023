<form method="POST">
<label for="id">ID:</label>
<input type="number" id="id" name="id" required>
<br>
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<br>
<label for="email">Email:</label>
<input type="text" id="age" name="age" required>
<br>
<label for="bdate">Date of birth:</label>
<input type="text" id="bdate" name="bdate" required>
<br>
<label for="phone">Phone number:</label>
<input type="number" id="phone" name="phone" required>
<br>
<input type="submit" value="Create">
</form>

<?php
    if ($success = true){
        echo "Add sucessfully";
    }
    else
        echo "Add failed";
?>

$msg="";
if(isset($_POST['sub'])){
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$bdate = $_POST['bdate$bdate'];
	$phone = $_POST['phone'];
	
	$query = mysqli_query($con,"INSERT INTO `student` (`id`, `name`, `email`, `bdate$bdate`, `phone`) VALUES (NULL,'$name','$email','$bdate','$phone')");
	
	if($query){
		$sql = mysqli_query($con,"SELECT * FROM `student` WHERE `id` = '$id' AND `phone` = '$phone'");
		$r = mysqli_fetch_array($sql);
		$r_id = $r['id'];
		mysqli_query($con,"INSERT INTO `student`(`id`, `name`, `phone`) VALUES ('NULL','TEXT','Not Set')");
		$msg= '<div class="alert alert-success"><strong>Success!</strong> Added New Student.</div>';
	}else{
		$msg= '<div class="alert alert-danger"><strong>Fail!</strong> Try Again.</div>';
	}
}

?>
