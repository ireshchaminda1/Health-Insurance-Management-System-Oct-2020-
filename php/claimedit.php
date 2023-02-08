<?php
//linking the configuration file
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

$sql = "UPDATE claim SET IPNUM='$pnum',FIRSTNAME='$fname1',LASTNAME='$fname2',DOB='$date', GENDER='$gender',ADDRESSLINE1='$street1',ADDRESSLINE2='$street2',CITY='$city',PROVINCE='$province',POSTALCODE='$pcode',MOBILENUMBER='$mobileno',HOME='$home', INSURANCEPLAN='$plan' WHERE IID='$id';";
 
	if(mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>
		alert('Successfully Updated');
	window.location = '../html/index4.html';
    </script>";;
	}
	else{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
	
mysqli_close($conn);
}
?>