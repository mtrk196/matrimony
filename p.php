<?php
	//include_once 'db-server.php';
	include 'db-server.php';
	session_start();
	$con=mysqli_connect("localhost","root","","matrimony");
	

	$email=$_POST['Email'];
	$phone_number=$_POST['phone-number'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$press_address=$_POST['present-address'];
	$perm_address=$_POST['permanent-address'];
	$about=$_POST['about-yourself'];
	$religion=$_POST['religion'];
	$height=$_POST['height'];
	$marital_status=$_POST['marrital'];
	$sex=$_POST['sex'];
	$img=$_POST['img'];
	$skin=$_POST['skin'];
	$d_o_b=$_POST['dob'];
	$bgrp=$_POST['bgp'];

	$sql="INSERT INTO account(EMAIL,PHONE_NUM,PASSWORD,NAME,PRESENT_ADDRESS,PERMANENT_ADDRESS,ABOUT,RELIGION,HEIGHT,MARITAL_STATUS,SEX,IMAGE,SKIN_TYPE,DOB,BLOOD_GRP) 
			VALUES('$email','$phone_number','$password','$name','$press_address','$perm_address','$about','$religion','$height','$marital_status','$sex','$img','$skin','$d_o_b','$bgrp');";
	mysqli_query($con,$sql);

	header("Location:login.php");
?>
	</body>
	</html>