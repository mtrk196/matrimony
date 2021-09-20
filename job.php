<?php
	session_start();
	echo "Complete your Job";
	include_once 'db-server.php';
	$con=mysqli_connect("localhost","root","","matrimony");
	$id=$_SESSION['user_id'];
	echo "$id<br>";

	$comp_name=$_POST['com_name'];
	$comp_pos=$_POST['com_pos'];
	$join_year=$_POST['join_date'];
	$resign_year=$_POST['res_date'];

	$sql="INSERT INTO job(POSITION,COM_NAME,JOIN_DATE,RESIGN_DATE,P_ID) VALUES('$comp_pos','$comp_name','$join_year','$resign_year','$id');";
	if(mysqli_query($con,$sql)){
		echo "Successful";
		header("Location:other.php");
	}else{
		echo "NO";
	}
?>
	