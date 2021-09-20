<?php
	session_start();
	include_once 'db-server.php';

	$con=mysqli_connect("localhost","root","","matrimony");
	
	$user=$_SESSION['user_id'];
	echo "$user is real";

	$temp=$_POST['friend'];
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
	$acceptor_id=0;
	$accepted_id=0;
	for($i=0;$i<$length;$i++) {
		if($i<$count){
			$st=$temp[$i];
			$acceptor_id=(int)($acceptor_id*10)+$st;
		}
		elseif ($i>$count) {
			$at=$temp[$i];
			$accepted_id=(int)($accepted_id*10)+$at;
		}
	}

	echo "<br>$accepted_id=accepted<br>";
	echo "$acceptor_id=acceptor";

	$_SESSION['user']=$acceptor_id;

	$sql="INSERT INTO friends(ACCEPTED_ID,ACCEPTOR_ID,FREINDSHIP) VALUES('$accepted_id','$acceptor_id',NOW());";
	if(mysqli_query($con,$sql)){
		echo "Successful";
		$req_got_sql="SELECT NAME FROM account WHERE ACC_ID='$accepted_id';";
		$res=mysqli_query($con,$req_got_sql);
		$res_chk=mysqli_num_rows($res);

	echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>Name</th><th>Message</th>';

		while ($arow=mysqli_fetch_assoc($res)) {
			$_SESSION['$user']=$acceptor_id;
			$_SESSION['accepted_id']=$accepted_id;
			header('Location:friend_list.php');
			echo '<tr>';
			echo '<td align = "center">' . $arow['NAME'] . '</td>';
			echo '<td align = "center">' . '<form method = "post" action = "message_list.php"><button name = "friend" type = "submit" value = ' . $acceptor_id,"n",$accepted_id . '>Chat</button></form></td>';
			echo '</tr>';
		}

	}
	else{
		echo "Something is wrong";
	}

	?>