<?php

 require 'config.php';

	 
  if(isset($_POST['user'])){
	  
	  $fristname = ($_post["fristname");
	  $lastname  = ($_post["lastname"]) ;
	  $email     = ($_post["date"]);
	  $phonenumber   = ($_post["button"]);
	  $City_Town      = ($_post["name"]);
	  $User_Insuerance_Plan  = ($_post["name1"]);

  }meka oneee neda habai eerrors awa oken php open karaddi
 
 $sql="INSERT INTO (fristname,lastname,emai,phonenumbe,City_Town,User_Insuerance_Plan)VALUES ("$fristname","$lastname","$emai",$phonenumber,"$City_Town","$User_Insuerance_Plan" )";
	 
 if ($conn->query($sql)){
	 echo("inserted Successfully");
 }
 else {
	 echo "Erorr".$conn->error;
 }
  
 $conn->close();
 
}
 ?>