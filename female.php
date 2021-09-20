<?php

	session_start();
	include_once 'db-server.php';

	$con=mysqli_connect("localhost","root","","matrimony");

	$fsql="SELECT * FROM account WHERE SEX='Female';";
	$fresult=mysqli_query($con,$fsql);
	$fresultCheck=mysqli_num_rows($fresult);

	echo '<table align="center" border="1px" style="width: 1300px; line-height: 40px;"><th>Name</th><th>Date of Birth</th><th>Gender</th><th>Present Address</th><th>Permanent Address</th><th>About</th><th>Image</th><th>Request</th>';

			while ($frow=mysqli_fetch_assoc($fresult)) {
						echo '<tr>';
						echo '<td align = "center">' . $frow['NAME'] . '</td>';
						echo '<td align = "center">' . $frow['DOB'] . '</td>';
						echo '<td align = "center">' . $frow['SEX'] . '</td>';
						echo '<td align = "center">' . $frow['PRSENT_ADDRESS'] . '</td>';
						echo '<td align = "center">' . $frow['PERMANENT_ADDRESS'] . '</td>';
						echo '<td align = "center">' . $frow['ABOUT'] . '</td>';
						echo '<td align = "center">' . $frow['IMAGE'] . '</td>';
						echo '<td align = "center">' . '<form method = "post" action = "array_practice.php"><button name = "submit" type = "submit" value = ' . $frow['ACC_ID'] . '>Request</button></form></td>';
						echo '</tr>';
}
echo '</table>';






?>