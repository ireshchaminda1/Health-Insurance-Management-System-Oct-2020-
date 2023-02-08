<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      require 'config1.php';
	  
	  $nic=$_POST["nicNum"];
      $status=$_POST["status"];
      $empname=$_POST["employername"];
      $street1=$_POST["empstreet1"];
      $street2=$_POST["empstreet2"];
      $city=$_POST["empcity"];
      $province=$_POST["empprovince"];
      $pcode=$_POST["emppcode"];
      $mobile=$_POST["empmobile"];
      $home=$_POST["emphome"];
      $salary=$_POST["wages"];
      $wagetype=$_POST["empwagetype"];
      $worktype=$_POST["typeofwork"];
      $selfincome=$_POST["selfincome"];
      

      $sql="INSERT INTO employee(nic,status,empname,street1,street2,city,province,pcode,mobile,home,salary,wagetype,worktype,selfincome)VALUES('$nic','$status','$empname','$street1','$street2','$city','$province','$pcode','$mobile','$home','$salary','$wagetype','$worktype','$selfincome')";

	if (mysqli_query($conn, $sql)) {
	echo "<script type='text/javascript'>
		alert('Successful Submission');
	window.location = '../html/RegistrationMedical.html';
    </script>";
	} else 
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


     ?> 
  </body>
</html>