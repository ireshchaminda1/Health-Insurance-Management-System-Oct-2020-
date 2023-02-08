<html>
<head><title>PHP</title></head>
<body>

<?php
//linking the configuration file
require 'config.php';

$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$Email=$_POST["email"];
$Mobileno=$_POST["tnumber"];
$Feedback=$_POST["feedback"];

$sql = "INSERT INTO feedback(firstName,lastName,Email,MobileNo,FEEDBACK)VALUES('$firstname','$lastname','$Email','$Mobileno','$Feedback')";
 
	if(mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>
		alert('Successfully inserted');
	window.location = '../html/index.html';
    </script>";;
	}
	else{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
	
mysqli_close($conn);
?>
</body>
</html>