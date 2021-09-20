<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>




<?php
	session_start();
	include_once 'db-server.php';

	$con=mysqli_connect("localhost","root","","matrimony");
	
	$sender_id=$_SESSION['user'];
	$receiver_id=$_SESSION['accepted_id'];
	echo "$sender_id<br>$receiver_id";

	echo '<body>';
	echo '<div id="main" bordeer:2px solid black; width:450px; height:500px; margin:24px auto;>';
	echo '<div id="message_area" width:98%; bordeer:2px solid blue; height:400px;>';
	echo '</div>';
	echo '<form method="post">';
	echo '<input type="text" name="message" placehoder="Type message">';
	echo '<input type="submit" name="submit" value="message_but">';
	echo '</form>';
	echo '</div>';
	echo '</body>';
	echo '</html>';
	?>