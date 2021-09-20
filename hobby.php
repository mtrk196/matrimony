<?php
	session_start();
	echo "Complete your hobby";
	include_once 'db-server.php';
	$con=mysqli_connect("localhost","root","","matrimony");
	$id=$_SESSION['user_id'];
	echo "$id<br>";

	$hobby_name=$_POST['hobby'];
	$about_hobby=$_POST['ab_hob'];
	

	$sql="INSERT INTO hobby(HOBBY_NAME,HOBBY_DETAILS,P_ID) VALUES('$hobby_name','$about_hobby','$id');";
	if(mysqli_query($con,$sql)){
		echo "Successful";
		header("Location:other.php");
	}else{
		echo "NO";
	}
?>
	