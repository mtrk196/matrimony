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

//$user=$_POST['notification'];
$user = $_SESSION['user_id'];

$req_got_sql = "SELECT * FROM request WHERE RECEIVER_ID='$user';";
$res = mysqli_query($con, $req_got_sql);
$res_chk = mysqli_num_rows($res);

echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>Name</th><th>Date of Birth</th><th>Gender</th><th>Present Address</th><th>Permanent Address</th><th>About</th><th>Relgion</th><th>Height</th><th>Marital Status</th><th>Skin Type</th><th>Image</th><th>Decision</th>';

while ($row = mysqli_fetch_assoc($res)) {
	$sender_id = $row['SENDER_ID'];
	$time = $row['SENT_TIME'];
	$sender_sql = "SELECT * FROM account WHERE ACC_ID='$sender_id';";
	$ares = mysqli_query($con, $sender_sql);
	$ares_chk = mysqli_num_rows($ares);



	while ($arow = mysqli_fetch_assoc($ares)) {
		echo '<tr>';
		$accepted_id = $arow['ACC_ID'];
		echo '<td align = "center">' . $arow['NAME'] . '</td>';
		echo '<td align = "center">' . $arow['DOB'] . '</td>';
		echo '<td align = "center">' . $arow['SEX'] . '</td>';
		echo '<td align = "center">' . $arow['PRESENT_ADDRESS'] . '</td>';
		echo '<td align = "center">' . $arow['PERMANENT_ADDRESS'] . '</td>';
		echo '<td align = "center">' . $arow['ABOUT'] . '</td>';
		echo '<td align = "center">' . $arow['RELIGION'] . '</td>';
		echo '<td align = "center">' . $arow['HEIGHT'] . '</td>';
		echo '<td align = "center">' . $arow['MARITAL_STATUS'] . '</td>';
		echo '<td align = "center">' . $arow['SKIN_TYPE'] . '</td>';
		echo '<td align = "center">' . $arow['IMAGE'] . '</td>';
		echo '<td align = "center">' . '<form method = "post" action = "friends.php"><button name = "friend" type = "submit" value = ' . $user, "n", $accepted_id . '>Accept</button></form></td>';
		echo '<td align = "center">' . '<form method = "post" action = "reject.php"><button name = "rejected" type = "submit" value = ' . $user, "n", $accepted_id . '>Reject</button></form></td>';
		echo '</tr>';
	}
}
?>