<?php
//saverecord.php
if(isset($_POST['ic']) ){
	//include database settings
	include "include/dbconnect.php";

	//fetch all form data 
	$fname=$_POST['fname'];
	$pusname=$_POST['pusname'];
	$nationality=$_POST['nationality'];
	$transportation=$_POST['transportation'];
	$port=$_POST['port'];
    $address=$_POST['address'];
	$reason=$_POST['reason'];
	$ic=$_POST['ic'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$phone=$_POST['phone'];
	$datet=$_POST['datet'];
	$vaccin=$_POST['vaccin'];
	$file=$_POST['file'];
	
	//sql command to insert record
	$sql="INSERT INTO applicationform(fname, pusname, nationality, transportation, port, address, reason, ic, email, country, phone, datet, vaccin, file) 
			VALUES ('$fname','$pusname','$nationality',
			'$transportation','$port','$address','$reason','$ic','$email','$country','$phone','$datet','$vaccin','$file') ";
	$result=mysqli_query($conn,$sql);

	//redirect to insertProceedingForm.php
	header("Location: appform.php?message=New+student+$fname+saved");
}
else{
	header("Location: appform.php?message=Please+key-in+student+record");
}

?>