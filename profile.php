<?php
	session_start();
	include_once 'db-server.php';

	$con=mysqli_connect("localhost","root","","matrimony");
	$id=$_SESSION['user_id'];
	
	$sql="SELECT * FROM account WHERE ACC_ID='$id';";
	$result=mysqli_query($con,$sql);
	$resChk=mysqli_num_rows($result);

	echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>User ID</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Image</th><th>Date of Birth</th><th>Present Address</th><th>Permatent Address</th><th>About</th><th>Religion</th><th>Height</th><th>Marital Status</th><th>Gender</th><th>Skin Type</th><th>Blood Group</th>';
		if($resChk>0){
			while ($arow=mysqli_fetch_assoc($result)) {
						$sender_id=$arow['ACC_ID'];
						echo '<tr>';
						echo '<td align = "center">' . $arow['ACC_ID'] . '</td>';
						echo '<td align = "center">' . $arow['NAME'] . '</td>';
						echo '<td align = "center">' . $arow['EMAIL'] . '</td>';
						echo '<td align = "center">' . $arow['PHONE_NUM'] . '</td>';
						echo '<td align = "center">' . $arow['IMAGE'] . '</td>';
						echo '<td align = "center">' . $arow['DOB'] . '</td>';
						echo '<td align = "center">' . $arow['PRESENT_ADDRESS'] . '</td>';
						echo '<td align = "center">' . $arow['PERMANENT_ADDRESS'] . '</td>';
						echo '<td align = "center">' . $arow['ABOUT'] . '</td>';
						echo '<td align = "center">' . $arow['RELIGION'] . '</td>';
						echo '<td align = "center">' . $arow['HEIGHT'] . '</td>';
						echo '<td align = "center">' . $arow['MARITAL_STATUS'] . '</td>';
						echo '<td align = "center">' . $arow['SEX'] . '</td>';
						echo '<td align = "center">' . $arow['SKIN_TYPE'] . '</td>';
						echo '<td align = "center">' . $arow['BLOOD_GRP'] . '</td>';
						echo '</tr>';
						echo '</table>';

}
	}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '<form method = "post" action = "matches.php"><button name = "submit" type = "submit" value = ' . $sender_id . '>Try for Matches</button></form></td>';
echo '<form method = "post" action = "notification.php"><button name = "notification" type = "submit" value = ' . $sender_id . '>Notification</button></form></td>';
echo '<form method = "post" action = "friend_list.php"><button name = "submit" type = "submit" value = ' . $id . '>Friends</button></form></td>';
echo '<form method = "post" action = "other.php"><button name = "submit" type = "submit" value = ' . $id . '>Add Other Information</button></form></td>';

?>
