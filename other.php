<!DOCTYPE html>
<html>

<head>
	<style>
		body {
			background-color: rgb(181, 189, 154);
			align: center;
		}
	</style>
</head>

<body>

</body>

</html>
<?php
session_start();
include_once 'db-server.php';

$con = mysqli_connect("localhost", "root", "", "matrimony");
$id = $_SESSION['user_id'];


echo '<form method = "post" action = "edu_com.php"><button name = "edu_com" type = "submit" value = ' . $id . '>Education</button></form></td>';
echo '<form method = "post" action = "hobby_com.php"><button name = "hobby_com" type = "submit" value = ' . $id . '>Hobby</button></form></td>';
echo '<form method = "post" action = "job_com.php"><button name = "job_com" type = "submit" value = ' . $id . '>Job</button></form></td>';
?>