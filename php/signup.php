<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      require 'config1.php';
	  
	  $name=$_POST["username"];
      $email=$_POST["email"];
      $password=$_POST["password"];
	  
	  // Remove all illegal characters from email
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		// Validate e-mail
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		} 		
		else {
			echo "<script type='text/javascript'>
			alert('$email is not a valid email address');
			window.location = '../html/signup.html';
			</script>";
			$email="";
			
		}

      $sql="INSERT INTO signup(name,email,password,repassowrd) VALUES ('$name','$email','$password')";

     if (mysqli_query($conn, $sql)) 
	{
	echo "<script type='text/javascript'>
	alert('Successful Sign Up');
	window.location = '../html/home.html';
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