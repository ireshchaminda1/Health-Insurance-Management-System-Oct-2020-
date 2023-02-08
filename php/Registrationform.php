<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
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

      $sql="INSERT INTO registration(NIC,FirstName,LastName,Birth,Gender,
	  Email,Mobiletel,Hometel,Streetaddress1,Streetaddress2,City,Province,Postalcode) VALUES ('$nic','$fname','$lname','$dob','$gender','$email','$mobile','$home','$street1','$street2','$city','$province','$pcode')";

	if (mysqli_query($conn, $sql)) {
	echo "<script type='text/javascript'>
		alert('Successful Submission');
	window.location = '../html/RegistationRecovery.html';
    </script>";;
	} else 
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
     ?> 
  </body>
</html>