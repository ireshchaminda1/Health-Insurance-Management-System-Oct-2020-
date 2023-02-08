<?php

	require 'config1.php';

	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$nic=$_POST["nicnum"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$home=$_POST["home"];
	$city=$_POST["city"];

	$sql = "UPDATE personal SET fname='$fname',lname='$lname',email='$email',home='$home',mobile='$mobile',city='$city' WHERE nicNum='$nic';";
	$result = $conn->query($sql);

	if (mysqli_query($conn, $sql)) {
	echo "<script type='text/javascript'>
		alert('Successfully Updated');
	window.location = '../html/RegistrationEmployee.html';
    </script>";;
	} else 
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?> 