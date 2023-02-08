<?php

require 'config.php';

if(isset($_POST['btsubmit'])){
	
	$id=$_POST['id'];
	$pnum=$_POST['pnum'];
	$fname1=$_POST['fname1'];
	$fname2=$_POST['fname2'];
	$date=$_POST['dates'];
	$gender=$_POST['gender'];
	$street1=$_POST['street1'];
	$street2=$_POST['street2'];
	$city=$_POST['city'];
	$province=$_POST['province'];
	$pcode=$_POST['pcode'];
	$mobileno=$_POST['tnumber'];
	$home=$_POST['tnumber1'];
	$plan=$_POST['plan'];
	
	$sql = "INSERT INTO claim(IID,IPNUM,FIRSTNAME,LASTNAME,DOB,GENDER,ADDRESSLINE1,ADDRESSLINE2,CITY,PROVINCE,POSTALCODE,MOBILENUMBER,HOME,INSURANCEPLAN) VALUES ('$id','$pnum','$fname1','$fname2','$date','$gender','$street1','$street2','$city','$province','$pcode','$mobileno','$home','$plan')";
	
	if (mysqli_query($conn, $sql)) {
	echo "<script type='text/javascript'>
		alert('Successful Submission');
	window.location = '../html/claim3.html';
    </script>";;
	} else 
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>