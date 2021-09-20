<?php
	session_start();
	include_once 'db-server.php';

	$con=mysqli_connect("localhost","root","","matrimony");

	$temp = $_POST['match'];
	$length=strlen($temp);

	$count=0;
	for($i=0;$i<$length;$i++) {
		if($temp[$i]!='n'){
			$count++;
		}
		else{
			break;
		}
	}
	$sender_id=0;
	$receiver_id=0;
	for($i=0;$i<$length;$i++) {
		if($i<$count){
			$st=$temp[$i];
			$sender_id=(int)($sender_id*10)+$st;
		}
		elseif ($i>$count) {
			$at=$temp[$i];
			$receiver_id=(int)($receiver_id*10)+$at;
		}
	}
	
	$con=mysqli_connect("localhost","root","","matrimony");

	$sql="INSERT INTO request(SENDER_ID,RECEIVER_ID,SENT_TIME,STATUS) VALUES('$sender_id','$receiver_id',NOW(),'0');";
	if(mysqli_query($con,$sql)){
		echo "Succcessfully Sent <br> Logout Now";
		header("Location:new_matches.php");
		$_POST['ACC_ID'] = $sender_id;
		echo '<td align = "center">' . '<form method = "post" action = "array_practice.php"><button name = "submit" 
			type = "submit" value='.$sender_id.'>Log Out</button></form></td>';
		$_POST['ACC_ID'] = $sender_id;
		echo "<br><a href = 'array_practice.php'>home</a>";
	}
	else{
		echo "failed";
	}

	
	?>