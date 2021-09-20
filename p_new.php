<?php
	//include_once 'db-server.php';
	include 'db-server.php';
	session_start();
	$con=mysqli_connect("localhost","root","","matrimony");
	

	$email=$_POST['Email'];
	$phone_number=$_POST['phone-number'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$press_address=$_POST['present-address'];
	$perm_address=$_POST['permanent-address'];
	$about=$_POST['about-yourself'];
	$religion=$_POST['religion'];
	$height=$_POST['height'];
	$marital_status=$_POST['marrital'];
	$sex=$_POST['sex'];
    
    $skin = $_POST['skin'];
    $d_o_b = $_POST['dob'];
    $bgrp = $_POST['bgp'];
    
    /*$file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt=explode('.',$fileName);
    $fileActExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png','pdf');

    if(in_array($fileActExt,$allowed)){
        if($fileError===0){
            if($fileSize< 5000000){
                $fileNameNew=uniqid('',true).".".$fileActExt;
                $fileDes='upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDes);
            }
        }
    }*/
//    print_r($_FILES['image']);

    $temporaryfile=$_FILES['image']['tmp_name'];
    $uploadedpath="uploadedimage/".$_FILES['image']['name'];
  //  print_r($uploadedpath);
    move_uploaded_file($temporaryfile, $uploadedpath);




	$sql="INSERT INTO account(EMAIL,PHONE_NUM,PASSWORD,NAME,PRESENT_ADDRESS,PERMANENT_ADDRESS,ABOUT,RELIGION,HEIGHT,MARITAL_STATUS,SEX,IMAGE,SKIN_TYPE,DOB,BLOOD_GRP) 
			VALUES('$email','$phone_number','$password','$name','$press_address','$perm_address','$about','$religion','$height','$marital_status','$sex','$uploadedpath','$skin','$d_o_b','$bgrp');";
	
    mysqli_query($con,$sql);



	///header("Location:login.php");

?>
	</body>
	</html>