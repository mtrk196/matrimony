<?php
	session_start();
	echo "Complete your Job Details";
	include_once 'db-server.php';
	$id=$_SESSION['user_id'];
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Complete your Job Details</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container-com-profile">
	<div class="com-profile-box">
	<div class="row-com-profile">
		<div class="col-md-6">
			<form action="job.php" method="post">
				<div class="form-group">
					<label>Company Name:</label>
					<input type="text" name="com_name" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Position</label>
					<input type="text" name="com_pos" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Joining Date:</label>
					<input type="date" name="join_date" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Resign Date:</label>
					<input type="date" name="res_date" class="form-control">
				</div>
				<button type="submit" name="edu_sub" class="match-button">Done</button>
			</form>
		</div>
		</div>
		</div>
		</div>
	</body>
	</html>



	