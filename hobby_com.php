<?php
	session_start();
	echo "Describe Your Hobbies";
	include_once 'db-server.php';
	$id=$_SESSION['user_id'];
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Complete your Hobbies</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container-com-profile">
	<div class="com-profile-box">
	<div class="row-com-profile">
		<div class="col-md-6">
			<form action="hobby.php" method="post">
				<div class="form-group">
					<label>Hobby Name:</label>
					<input type="text" name="hobby" class="form-control" required>
				</div>
				<div class="form-group">
					<label>About Hobby</label>
					<input type="text" name="ab_hob" class="form-control" required>
				</div>
				
				<button type="submit" name="hob_sub" class="match-button">Done</button>
			</form>
		</div>
		</div>
		</div>
		</div>
	</body>
	</html>



	