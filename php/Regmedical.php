<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      require 'config1.php';
	  
	  $nic=$_POST["nicNum"];
      $medical=$_POST["medical1"];
      $medical2=$_POST["medical2"];
      $medical3=$_POST["medical3"];
      $medical4=$_POST["medical4"];
      $medical5=$_POST["medical5"];
      $tobaccouser=$_POST["tobacco"];
      $insurancetype=$_POST["insurance"];

      $sql="INSERT INTO medicalcondition(nic,medical,medical2,medical3,medical4,medical5,tobaccouser,insurancetype) VALUES ('$nic','$medical','$medical2','$medical3','$medical4','$medical5','$tobaccouser','$insurancetype')";

     if (mysqli_query($conn, $sql)) 
	{
	echo "<script type='text/javascript'>
		alert('Successful Submission');
	window.location = '';
    </script>";
	}
	else 
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


     ?> 
  </body>
</html>