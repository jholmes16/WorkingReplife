<?php
	include_once('db.php');
	
	$recon = $_POST['reasoncontact'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$uwebs = $_POST['userwebsite'];
	$tenum = $_POST['telnumber'];
	$usmes = $_POST['usermessage'];
	
	$sql = "INSERT INTO user (reg_date,reason_contact,first_name,email,user_website,tel_number,user_message) VALUES (CURDATE(),'$recon','$fname','$lname','$uwebs','$tenum','$usmes')";
	
	mysql_query($sql);
	echo "Your information has been succesfully sent. We will be in contact with you shortly.";
	
?>