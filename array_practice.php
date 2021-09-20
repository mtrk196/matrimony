<!--check.php-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

</body>
</html>
<?php
	session_start();
	include_once 'db-server.php';
	include 'req.php';
	$temp = $_POST['ACC_ID'];
	echo $temp . "jjkklklhjh";
	/*$email = $_POST['Email'];
	//$password = $_POST['password'];
	$con=mysqli_connect("localhost","root","","matrimony");

	$result=mysqli_query($con,"SELECT * FROM account WHERE EMAIL='$email' and PASSWORD='$password'") or die("failed".mysql_error());

	$row=mysqli_fetch_assoc($result);
	if($row['EMAIL']==$email && $row['PASSWORD']==$password){
		$asql="SELECT * FROM account WHERE EMAIL='$email';";
		$aresult=mysqli_query($con,$asql);
		$aresultCheck=mysqli_num_rows($aresult);
		echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>User ID</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Image</th><th>Date of Birth</th><th>Present Address</th><th>Permatent Address</th><th>About</th><th>Religion</th><th>Height</th><th>Marital Status</th><th>Gender</th><th>Skin Type</th>';
		if($aresultCheck>0){
			while ($arow=mysqli_fetch_assoc($aresult)) {
						$sender_id=$arow['ACC_ID'];
						echo '<tr>';
						echo '<td align = "center">' . $arow['ACC_ID'] . '</td>';
						echo '<td align = "center">' . $arow['NAME'] . '</td>';
						echo '<td align = "center">' . $arow['EMAIL'] . '</td>';
						echo '<td align = "center">' . $arow['PHONE_NUM'] . '</td>';
						echo '<td align = "center">' . $arow['IMAGE'] . '</td>';
						echo '<td align = "center">' . $arow['DOB'] . '</td>';
						echo '<td align = "center">' . $arow['PRSENT_ADDRESS'] . '</td>';
						echo '<td align = "center">' . $arow['PERMANENT_ADDRESS'] . '</td>';
						echo '<td align = "center">' . $arow['ABOUT'] . '</td>';
						echo '<td align = "center">' . $arow['RELIGION'] . '</td>';
						echo '<td align = "center">' . $arow['HEIGHT'] . '</td>';
						echo '<td align = "center">' . $arow['MARITAL_STARUS'] . '</td>';
						echo '<td align = "center">' . $arow['SEX'] . '</td>';
						echo '<td align = "center">' . $arow['SKIN_TYPE'] . '</td>';
						echo '</tr>';
						echo '</table>';

}
	}
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '<form method = "post" action = "matches.php"><button name = "submit" type = "submit" value = ' . $sender_id . '>Try for Matches</button></form></td>';
echo '<form method = "post" action = "notification.php"><button name = "notification" type = "submit" value = ' . $sender_id . '>Notification</button></form></td>';*/
	?>