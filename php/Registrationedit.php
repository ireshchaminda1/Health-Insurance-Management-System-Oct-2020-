<?php
//linking the configuration file
require 'config.php';

      $fname=$_POST["fname"];
      $lname=$_POST["lname"];
      $dob=$_POST["birthday"];
      $gender=$_POST["gender"];
      $nic=$_POST["nicNum"];
      $email=$_POST["email"];
      $mobile=$_POST["mobile"];
      $home=$_POST["home"];
      $street1=$_POST["street1"];
      $street2=$_POST["street2"];
      $city=$_POST["city"];
      $province=$_POST["province"];
      $pcode=$_POST["pcode"];

$sql = "UPDATE registration SET firstName='$fname',lastName='$lname',Birth='$dob',Gender='$gender',Email='$email',Mobiletel='$mobile',Hometel='$home',Streetaddress1='$street1',Streetaddress2='$street2',City='$city',Province='$province',Postalcode='$pcode' WHERE NIC='$nic';";
 
	if(mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>
		alert('Successfully Updated');
	window.location = 'RegistationRecovery.html';
    </script>";;
	}
	else{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
	
mysqli_close($conn);
?>