<?php

require 'config.php';



 if(isset($_POST['us'])){
	
	$fname=$_POST['fname'];
	$fame=$_POST['fame'];
	$email=$_POST['emails'];
    $message=$_POST['message'];

$sql="INSERT INTO contact(faname,fame,email,massages)VALUES('$fname','$fame','$email','$message')";

if ($conn->query($sql)){
	echo("inserted Successfully");
}
else {
	echo "Erorr".$conn->error;
}
 
$conn->close();

}
 ?>
	
	
	



 