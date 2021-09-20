<?php
	session_start();
	echo "Complete your Education";
	include_once 'db-server.php';
	$con=mysqli_connect("localhost","root","","matrimony");
	$id=$_SESSION['user_id'];
	echo "$id<br>";

	$exam_name=$_POST['exam'];
	$exam_res=$_POST['exam_res'];
	$exam_pass_year=$_POST['pass_year'];
	

	$sql="INSERT INTO education(EXAM_NAME,EXAM_RESULT,PASSING_YEAR,P_ID) VALUES('$exam_name','$exam_res','$exam_pass_year','$id');";
	if(mysqli_query($con,$sql)){
		echo "Successful";
		header("Location:other.php");
	}else{
		echo "NO";
	}
?>
	