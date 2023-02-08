<?php
//linking the configuration file
require 'config.php';

$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$Email=$_POST["email"];
$Mobileno=$_POST["tnumber"];
$Feedback=$_POST["feedback"];

$sql = "UPDATE feedback SET firstName='$firstname',lastName='$lastname',MobileNo='$Mobileno',FEEDBACK='$Feedback' WHERE Email='$Email';";
 
	if(mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>
		alert('Successfully Updated');
	window.location = 'index.html';
    </script>";;
	}
	else{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
	
mysqli_close($conn);
?>