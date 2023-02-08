<?php
//linking the configuration file
require 'config.php';

$firstname=$_POST["fname"];
$Email=$_POST["email"];


$sql = "UPDATE consult SET Name='$firstname' WHERE Email='$Email';";
 
	if(mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>
		alert('Successfully Updated');
	window.location = '../html/index2.html';
    </script>";;
	}
	else{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
	
mysqli_close($conn);
?>