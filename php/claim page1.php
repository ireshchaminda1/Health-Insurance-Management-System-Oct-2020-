
<?php

require  'config.php';

  if(isset($_POST['subb'])){

	  
	 
	$fristname 		= $_POST['firstname'];
	$lastname   	= $_POST['lastname'] ;
	$date      	 	= $_POST['dates'];
	$sex        	= $_POST['sex'];                        
	$stad1      	= $_POST['st1'];
	$stad2      	= $_POST['st2'];
	$city      	 	= $_POST['city'];
	$pcode      	= $_POST['code'];
	$tnum       	= $_POST['pstad'];
	$stad       	= $_POST['stad'];
	$paitientsrel   = $_POST['paitientsrel'];

$sql="INSERT INTO claims(firstname,lastname,dates,gender,street_address,st2,city,p_code,ptnumber,stad,paitientsrel)VALUES ('$fristname','$lastname','$date','$sex','$stad1','$stad2','$city','$pcode','$tnum','$stad','$paitientsrel')";
	 
 if ($conn->query($sql)){
	 echo("inserted Successfully");
 }
 else {
	 echo "Erorr".$conn->error;
 }
  
 $conn->close();                  
								
 
}
 ?>
