<?php 
	
	include ('../dbcon.php');

	$id = $_POST['sid'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$std = $_POST['std'];
	$qry = " UPDATE `student` SET `if` = '$if', `name` = '$name', `gender` = '$gender', WHERE `id` = '$id'; ";

	$run = mysqli_query($con,$qry);

	if( $run == true) { 
	?>

	<script type="text/javascript"> alert("Luu du lieu thanh cong!");
	</script>

	<?php 

	}
