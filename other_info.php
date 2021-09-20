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
	$esql="SELECT * FROM education WHERE P_ID='$receiver_id';";
	$eres=mysqli_query($con,$esql);
	$echk=mysqli_num_rows($eres);
	
echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>Exam Name</th><th>Exam Result</th><th>Passing Year</th>';
if ($echk > 0) {
	while ($frow = mysqli_fetch_assoc($eres)) {
		echo '<tr>';
		echo '<td align = "center">' . $frow['PASSING_YEAR'] . '</td>';
		echo '<td align = "center">' . $frow['EXAM_NAME'] . '</td>';
		echo '<td align = "center">' . $frow['EXAM_RESULT'] . '</td>';
		echo '</tr>';
	}
}
echo '</table>';
echo "<br>";
echo "<br>";
echo "<br>";

$sql = "SELECT * FROM job WHERE P_ID='$receiver_id';";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>Company Name</th><th>Position</th><th>Join Date</th><th>Resign Date</th>';
if ($resultCheck > 0) {
	while ($frow = mysqli_fetch_assoc($result)) {
		echo '<tr>';
		echo '<td align = "center">' . $frow['COM_NAME'] . '</td>';
		echo '<td align = "center">' . $frow['POSITION'] . '</td>';
		echo '<td align = "center">' . $frow['JOIN_DATE'] . '</td>';
		echo '<td align = "center">' . $frow['RESIGN_DATE'] . '</td>';
		echo '</tr>';
	}
}
echo '</table>';
echo "<br>";
echo "<br>";
echo "<br>";

$sql = "SELECT * FROM hobby WHERE P_ID='$receiver_id';";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>Hobby Name</th><th>About Hobby</th>';
if ($resultCheck > 0) {
	while ($frow = mysqli_fetch_assoc($result)) {
		echo '<tr>';
		echo '<td align = "center">' . $frow['HOBBY_NAME'] . '</td>';
		echo '<td align = "center">' . $frow['HOBBY_DETAILS'] . '</td>';
		echo '</tr>';
	}
}

echo '</table>';

?>