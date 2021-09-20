<?php
	session_start();
	include_once 'db-server.php';

	$con=mysqli_connect("localhost","root","","matrimony");

	$fsql="SELECT * FROM account WHERE SEX='Male';";
	$fresult=mysqli_query($con,$fsql);
	$fresultCheck=mysqli_num_rows($fresult);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>result</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<table align="center" border="1px" style="width: 1300px; line-height: 40px;" method="post">
		<tr>
			<th colspan="13"><h2>Here is Your Future</h2></th>
		</tr>
		<t>
			<th>Name</th>
			<th>Date of Birth</th>
			<th>Gender</th>
			<th>Height</th>
			<th>Skin Type</th>
			<th>Present Address</th>
			<th>Permatent Address</th>
			<th>About</th>
			<th>Marital Status</th>
			<th>Image</th>
			<th>Religion</th>
			<th>Request</th>
		</t>
		<?php
			while ($frow=mysqli_fetch_assoc($fresult)) {
			?>
			<tr>
				<td><?php echo $frow['NAME'];?></td>
				<td><?php echo $frow['DOB'];?></td>
				<td ><?php echo $frow['SEX'];?></td>
				<td ><?php echo $frow['HEIGHT'];?></td>
				<td ><?php echo $frow['SKIN_TYPE'];?></td>
				<td ><?php echo $frow['PRSENT_ADDRESS'];?></td>
				<td ><?php echo $frow['PERMANENT_ADDRESS'];?></td>
				<td ><?php echo $frow['ABOUT'];?></td>
				<td ><?php echo $frow['MARITAL_STARUS'];?></td>
				<td ><?php echo $frow['IMAGE'];?></td>
				<td ><?php echo $frow['RELIGION'];?></td>
				<td><button type="submit" name="submit" class="match-button">Request</button></td>
			</tr>
			<?php
			}
			?>
	</table>
</body>
</html>