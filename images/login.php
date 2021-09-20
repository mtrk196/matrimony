<?php
	include_once 'db-server.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Or Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login Here</h2>
			<form action="check.php " method="post">
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="Email" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>

			<form action="com-profile.php">
				<div class="form-group">
					<label>Don't Have Account!! Create Here</label>
					<button type="submit" class="btn btn-primary">Create Account</button>
				</div>
		</div>
</div>

 </body>
</html>