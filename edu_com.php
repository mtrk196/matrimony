<?php
	session_start();
	echo "Complete your Education";
	include_once 'db-server.php';
	$id=$_SESSION['user_id'];
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Complete your Education</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container-com-profile">
	<div class="com-profile-box">
	<div class="row-com-profile">
		<div class="col-md-6">
			<form action="education.php" method="post">
				<div class="form-group">
					<label>Examination Name:</label>
					<input type="text" name="exam" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Examination Result</label>
					<input type="text" name="exam_res" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Passing Year</label>
					<input type="date" name="pass_year" class="form-control" required>
				</div>
				
				<button type="submit" name="edu_sub" class="match-button">Done</button>
			</form>
		</div>
		</div>
		</div>
		</div>
	</body>
	</html>



	