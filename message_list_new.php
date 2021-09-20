<?php
session_start();
include_once 'db-server.php';

if (isset($_SESSION['user'])) {
	echo "";
}
$user = $_SESSION['user_id'];
$receiver = $_SESSION['receiver_id'];
//echo "hlw receive_id $receiver";

$con = mysqli_connect("localhost", "root", "", "matrimony");

$sql2 = "SELECT NAME FROM account WHERE ACC_ID='$user';";
$res2 = mysqli_query($con, $sql2);
while ($row2 = mysqli_fetch_assoc($res2)) {
	$user_name = $row2['NAME'];
}
//echo "$user_name<br>";
$sql3 = "SELECT NAME FROM account WHERE ACC_ID='$receiver';";
$res3 = mysqli_query($con, $sql3);
while ($row3 = mysqli_fetch_assoc($res3)) {
	$receiver_name = $row3['NAME'];
}
//echo "$receiver_name<br>";



$sql1 = "SELECT * FROM chat WHERE (SENDER_ID='$user' AND RECIEVER_ID='$receiver') OR (SENDER_ID='$receiver' AND RECIEVER_ID='$user');";
$row1 = mysqli_query($con, $sql1);
while ($row = mysqli_fetch_assoc($row1)) {
	$msg_sender_id = $row['SENDER_ID'];

	$nsql = "SELECT NAME FROM account WHERE ACC_ID='$msg_sender_id';";
	$nrow1 = mysqli_query($con, $nsql);
	while ($nrow = mysqli_fetch_assoc($nrow1)) {
		$msg_sender_name = $nrow['NAME'];
	}
	$message = $row['MSG_BODY'];
	//echo '<h4 style="color:red">' . $msg_sender_name . '</h4>';
	//echo '<p>' . $message . '<br></p>';
	//echo '<hr>';
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Chat</title>
	<script>
		function ajax() {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chatt').innerHTML = req.responseText;
				}
			}
			req.open('POST', 'chatt.php', true);
			req.send();
		}
		setInterval(function() {
			ajax()
		}, 1000);
	</script>
	<style>
		* {
			margin: 0px;
			padding: 0px;
		}

		body {
			background-color: rgb(181, 189, 154);
		}

		#container {
			text-align: center;
			border: 2px solid black;
			width: 700px;
			height: 444px;
			margin: 24px auto;
		}

		#chat-box {
			width: 98%;
			padding: 1% 1%;
			margin: 20px auto;
			height: 390px;
		}
	</style>
</head>

<body onload="ajax();">
	<div id="container">
		<div id="chat-box">
			<div id="chatt"></div>
		</div>
		<form action="message_list_new.php" method="POST" id="chat-form">

			<textarea name="msg_body" id="mssg_body" cols="30" rows="10"></textarea>
			<input type="submit" name="submitt" value="send it" />
		</form>
		<?php
		if (isset($_POST['submitt'])) {

			$msge_body = $_POST['msg_body'];
			//$receiver_id=$_POST['']
			$insert = "INSERT INTO chat (SENDER_ID,MSG_BODY,SENT_TIME,RECIEVER_ID) VALUES('$user','$msge_body','NOW()','$receiver');";
			$run = $con->query($insert);
		}
		?>
	</div>
</body>

</html>