
<?php
	session_start();
	include_once 'db-server.php';

	$email = $_POST['Email'];
	$password = $_POST['password'];
	$con=mysqli_connect("localhost","root","","matrimony");

	$result=mysqli_query($con,"SELECT * FROM account WHERE EMAIL='$email' and PASSWORD='$password'") or die("failed".mysql_error());

	$row=mysqli_fetch_assoc($result);
	if($row['EMAIL']==$email && $row['PASSWORD']==$password){
		$asql="SELECT ACC_ID FROM account WHERE EMAIL='$email';";
		$aresult=mysqli_query($con,$asql);
		$aresultCheck=mysqli_num_rows($aresult);

		if($aresultCheck>0){
		while ($arow=mysqli_fetch_assoc($aresult)) {
			$_SESSION['user_id']=$arow['ACC_ID'];
			header("Location:profile_new.php");
		}

}
}
?>