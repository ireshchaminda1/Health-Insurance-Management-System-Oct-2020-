<?php

	require 'config1.php';

	$empname=$_POST["empname"];
	$nic=$_POST["nicnum"];
	$mobile=$_POST["mobile"];
	$home=$_POST["home"];

	$sql = "UPDATE employee SET empname='$empname',mobile='$mobile',home='$home' WHERE nic='$nic';";
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