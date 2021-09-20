<?php
	session_start();
	include_once 'db-server.php';

	$con=mysqli_connect("localhost","root","","matrimony");

	$temp=$_POST['rejected'];
	echo "$temp";

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
	$rejector_id=0;
	$rejectedted_id=0;
	for($i=0;$i<$length;$i++) {
		if($i<$count){
			$st=$temp[$i];
			$rejector_id=(int)($rejector_id*10)+$st;
		}
		elseif ($i>$count) {
			$at=$temp[$i];
			$rejectedted_id=(int)($rejectedted_id*10)+$at;
		}
	}

	$sql="SELECT REQUEST_ID FROM request WHERE RECEIVER_ID='$rejector_id' and SENDER_ID='$rejectedted_id';";

	$res=mysqli_query($con,$sql);
	$res_chk=mysqli_num_rows($res);

	while ($row=mysqli_fetch_assoc($res)) {
		$request_id=$row['REQUEST_ID'];
		echo "<br>REQUEST_ID=$request_id";
		$asql="DELETE FROM request WHERE REQUEST_ID='$request_id';";
		if(mysqli_query($con,$asql)){
			echo "Successfully Rejected";
			header("Location:profile.php");
		}
		else{
			echo "Something is wrong";
		}
	}

?>