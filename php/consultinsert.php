<html>
<head><title>PHP</title></head>
<body>

<?php
//linking the configuration file
require 'config.php';

$firstname=$_POST["fname"];
$Email=$_POST["email"];

$sql = "INSERT INTO consult(Name,Email)VALUES('$firstname','$Email')";
 
	if(mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>
		alert('Successfully inserted');
	window.location = '../html/index2.html';
    </script>";;
	}
	else{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
	
mysqli_close($conn);
?>
</body>
</html>