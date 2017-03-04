<?php require_once('inc/connection.php'); ?>
<?php

$index1=$_POST['index'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$school=$_POST['school'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$district=$_POST['district'];
$phone=$_POST['phone'];
$course=$_POST['course'];



$query="INSERT INTO students (index1, fname, lname, school, address1, address2, city, district, phone, course) VALUES ('{$index1}','{$fname}','{$lname}','{$school}', '{$address1}', '{$address2}', '{$city}', '{$district}', '{$phone}', '{$course}')";


$result=mysqli_query($connection, $query);

	if ($result) {
		 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
	} else {
		echo "<script type='text/javascript'>alert('failed!')</script>";
	}

?>
<?php mysqli_close($connection); ?>
