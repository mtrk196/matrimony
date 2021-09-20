<?php
session_start();
include_once 'db-server.php';

$con = mysqli_connect("localhost", "root", "", "matrimony");

//$sender_id=$_POST['submit'];
$sender_id = $_SESSION['user_id'];
/*echo "Sender ID is" . $sender_id;*/
echo '<br>';
echo '<br>';

$gender = "SELECT SEX FROM account WHERE ACC_ID='$sender_id';";
$genres = mysqli_query($con, $gender);
$genreschk = mysqli_num_rows($genres);
while ($grow = mysqli_fetch_assoc($genres)) {
	$gE = $grow['SEX'];
}

$fsql = "SELECT * FROM account WHERE SEX!='$gE';";
$fresult = mysqli_query($con, $fsql);
$fresultCheck = mysqli_num_rows($fresult);

echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>Image</th><th>Name</th><th>Date of Birth</th><th>Gender</th><th>About</th><th>Relgion</th><th>Height</th><th>Marital Status</th><th>Skin Type</th><th>Other Info</th><th>Request</th>';

while ($frow = mysqli_fetch_assoc($fresult)) {
	echo '<tr>';
	echo '<td><img src="images/1.jpeg" class="image" /></td>';
	echo '<td align = "center">' . $frow['NAME'] . '</td>';
	echo '<td align = "center">' . $frow['DOB'] . '</td>';
	echo '<td align = "center">' . $frow['SEX'] . '</td>';

	echo '<td align = "center">' . $frow['ABOUT'] . '</td>';
	echo '<td align = "center">' . $frow['RELIGION'] . '</td>';
	echo '<td align = "center">' . $frow['HEIGHT'] . '</td>';
	echo '<td align = "center">' . $frow['MARITAL_STATUS'] . '</td>';
	echo '<td align = "center">' . $frow['SKIN_TYPE'] . '</td>';

	echo '<td align = "center">' . '<form method = "post" action = "other_info.php"><button name = "other" type = "submit" value = ' . $frow['ACC_ID'] . '>GO</button></form></td>';
	echo '<td align = "center">' . '<form method = "post" action = "req.php"><button name = "match" type = "submit" value = ' . $sender_id, "n", $frow['ACC_ID'] . '>Request</button></form></td>';
	echo '</tr>';
}
echo '</table>';

?>

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
	<td><img src="images/asa.jpeg" class="image" /></td>
	<td class="Td"><b>Name : <? php // echo $frow['NAME']; 
								?> </br>Date of Birth : <?php //echo $frow['DOB']; 
																					?>
			</br>Religion : <?php //echo $frow['RELIGION']; 
							?></br>Present Address : <?php //echo $frow['PRESENT_ADDRESS']; 
																						?>
			</br>Blood Group : <?php //echo $frow['BLOOD_GRP']; 
								?>
	</td>

</body>

</html>