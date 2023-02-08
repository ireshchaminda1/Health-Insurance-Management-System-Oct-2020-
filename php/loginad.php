<?php

require 'config.php';



  if(isset($_POST['log'])){
	
	$username=$_POST['username'];
	$password=$_POST['password'];

$sql="INSERT INTO login(username,passwords)VALUES('$username','$password')";

 if ($conn->query($sql)){
	 echo("<script type='text/javascript'>
	 alert('Welcome Admin');
	 window.location='phphome.php';
	 </script>
	 ");
 }
 else {
	 echo "Erorr".$conn->error;
 }
  
 $conn->close();
 
}
 ?>