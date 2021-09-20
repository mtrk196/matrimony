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
include 'db-server.php';
$con = mysqli_connect("localhost", "root", "", "matrimony");
$user = $_SESSION['user_id'];
//echo "hello =$user";

$sql = "SELECT * FROM friends WHERE ACCEPTOR_ID='$user';";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($fid = mysqli_fetch_assoc($result)) {
		$accepted_friends_id = $fid['ACCEPTED_ID'];
		//echo "$accepted_friends_id<br>";
	}
}

$sql = "SELECT ACCEPTOR_ID FROM friends WHERE ACCEPTED_ID='$user';";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($fid = mysqli_fetch_assoc($result)) {
		$acceptor_friends_id = $fid['ACCEPTOR_ID'];
		//echo "$acceptor_friends_id<br>";
	}
}


echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>Name</th><th>Message</th><th>Choose</th>';


$sql = "SELECT NAME,ACC_ID FROM account WHERE ACC_ID='$accepted_friends_id' OR ACC_ID='$acceptor_friends_id';";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($fname = mysqli_fetch_assoc($result)) {
		$friends_name = $fname['NAME'];
		$friends_id = $fname['ACC_ID'];
		echo '<tr>';
		echo '<td align = "center">' . $fname['NAME'] . '</td>';
		echo '<td align = "center">' . '<form method = "post" ><button name = "match" type = "submit" value = ' . $friends_id . '>Chat</button></form></td>';
		echo '<td align = "center">' . '<form method = "post" ><button name = "engage" type = "submit" value = ' . $friends_id . '>Engage</button></form></td>';
		echo '</tr>';
	}
}
if (isset($_POST['match'])) {
	echo "$friends_name";
	$_SESSION['receiver_id'] = $friends_id;
	header('Location:message_list_new.php');
}
if (isset($_POST['engage'])){
	$_SESSION['receiver_id']=$friends_id;
	header('couple.php');
}

echo '</table>';
?>