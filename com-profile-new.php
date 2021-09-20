<?php
	session_start();
	echo "Complete your profile";
	include_once 'db-server.php';
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Complete Your Profile for Matches</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container-com-profile">
	<div class="com-profile-box">
	<div class="row-com-profile">
		<div class="col-md-6">
			<form action="p_new.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Enter Your Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Enter Your Email</label>
					<input type="text" name="Email" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Enter Your Phone Number:</label>
					<input type="text" name="phone-number" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Enter Your Date of Birth:</label>-
					<input type="Date" name="dob" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Enter Your Present Address:</label>
					<input type="text" name="present-address" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Enter Your Permanent Address:</label>
					<input type="text" name="permanent-address" class="form-control" required>
				</div>
				<div class="form-group">
					<label>About Yourself:</label>
					<input type="text" name="about-yourself" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Enter Your Religion:</label>
					<select name="religion" required>
						<option>Muslim</option>
						<option>Hindu</option>
						<option>Christian</option>
						<option>Buddhist</option>
					</select>
				</div>
				<div class="form-group">
					<label>Enter Your Height:</label>
					<input type="height" name="height" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Enter Your Marital Status:</label>
					<select name="marrital" required>
						<option>Single</option>
						<option>Divorce</option>
						<option>Widow</option>
						<option>Male Widow</option>
					</select>
				</div>
				<div class="form-group">
					<label>Sex:</label>
					<select name="sex" required>
						<option >Male</option>
						<option>Female</option>
					</select>
				</div>
				<div class="form-group">
					<label>Image:</label>
					<input type="hidden" name="size" value="1000000">
					<div>
                        <input type="file" name="image">
                    </div>
				</div>
				<div class="form-group">
					<label>Skin Type:</label>
					<input type="text" name="skin">
				</div>
				<div class="form-group">
					<label>Blood Group:</label>
					<input type="text" name="bgp">
				</div>
				<button type="submit" name="submit" class="match-button">Done</button>
			</form>
		</div>
		</div>
		</div>
		</div>
	</body>
	</html>



	