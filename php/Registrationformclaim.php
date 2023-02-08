<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      require config1.php;
      $fname=$_POST["claimfname"];
      $lname=$_POST["claimlname"];
      $dob=$_POST["claimbirthday"];
      $gender=$_POST["claimgender"];
      $nic=$_POST["claimnicNum"];
      $email=$_POST["claimemail"];
      $mobile=$_POST["claimmobile"];
      $home=$_POST["claimhome"];
      $street1=$_POST["claimstreet1"];
      $street2=$_POST["claimstreet2"];
      $city=$_POST["claimcity"];
      $province=$_POST["claimprovince"];
      $pcode=$_POST["claimpcode"];

      $sql="INSERT INTO claim(fname,lname,dob,gender,nic,email,home,mobile,street1,street2,city,province,pcode) VALUES ('$fname','$lname','$dob','$gender','$nic','$email','$mobile','$home','$street1','$street2','$city','$province','$pcode')";

      if($con->query($sql))
      {
		    echo "Inserted successfully";
	    }
	    else
      {
		    echo "Error:". $con->error;
	    }


     ?> 
  </body>
</html>