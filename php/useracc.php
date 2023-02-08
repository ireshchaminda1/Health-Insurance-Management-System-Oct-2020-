<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="../styles/style.css">
<link rel="stylesheet" href="../styles/User account.css">
<link rel="stylesheet" href="../styles/footer.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../js/script.js"></script> 
<script src="../js/userac.js"></script> 

<title>User account</title>

<title>Health Insurance Management System-Home</title>

</head>
</head>
<body>

<!--Header-->

	<div class="header">
    <img class="float" src="../Images/logo.png" style="width:200px;height:150px;margin-left:100px;"><center>
  <h1 style="text-shadow:1px 1px 0 #444">AXA Health Insurance Management<br>System</h1></center>
      <p align="right"><button class="w3-button w3-border w3-hover-blue">Log In / Sign In</button></p>
	</div>
    
<div class="topnav">
  <a class="#" href="#home">Home</a>
  <a href="#about">Request Individual Consult</a>
  <a href="claim page1.html">Claim Insurance</a>
  <a href="#about">About Us</a>
  <a href="contact us.html">Contact Us</a>

</div>

<br><br><br>

	<section id="act">
	
	<div class="tact1">
	     <img src="../Images/Userimage.png" style="width:150px;height:150px;margin-left:10px;" >
	<form >
	       <div class="puts1" id="tr">
	         <button>User Information</button>
	       </div>
	   
	     <div class="puts2">
		    <button onclick="Button()">Edit profile</button >
	      </div>
	
	
	</div>
		<section id="act2">
	         <div class="tact2">
		        <div class="c-2d" >


                <?php

require 'config.php';

if(isset($_POST["user"])){
    $phnum=$_POST["phnm"];
    

$sql = "SELECT firstname,lastname,dates,gender,street_address,st2,city,p_code,ptnumber,stad,button1 FROM claim WHERE tpnumber='$phnum'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    
    while($row = $result->fetch_assoc()) {
        echo "First name :" . $row["firstname"]. "<br>
        Last name :" . $row["lastname"]. "<br>
        Birthday : " . $row["dates"]."<br>
        Gender".$row["gender"] ."</br>
        Street Adress".$row["street_address"] ."<br>                           
        Street Address line 2 :".$row["st2"] ."<br>
        City :".$row["city"] ."</td>
        Postal Code".$row["p_code"] ."<br>
        Phone number ".$row["ptnumber"] ."<br>
        Street Address".$row["stad"] ."<br>
        realtion to the insurer".$row["button1"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
}
?>
				
	        </div>
		</section>
	</section>
	<br><br> <br><br><br><br>
	
	 <!-- Footer -->
        
            <div class="footer">
                
                <div class="social-media">
                    <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></></i></a>
                    <a href="https://myaccount.google.com/profile?hl=en"><i class="fa fa-google-plus" aria-hidden="true"></></i></a>
                    <a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope" aria-hidden="true"></></i></a>
                </ul>
            </div>
			
            <div class="inner-footer">

                    
            <div class="footer-items1">
                <h5 style="color:aliceblue;">Contact Details</h5>
                <ul>
                    <li><i class ="fa fa-map-marker" aria-hidden="ture"></i> 10, Main Bulding,Colombo-10</li>
                    <li><i class ="fa fa-phone" aria-hidden="ture"></i> +94 76 536 7609</li>
                    <li><i class ="fa fa-envelope" aria-hidden="ture"></i> support@axa.lk</li>
                </ul>
            </div>

            <div class="footer-items2">
                <center>                  
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Request individual consult</a></li>     
                </ul>
            </div>
            </center>
			
            <div style="float:right;"class="footer-items3">
                <div style="float:right;">
                     <h5 style="color: aliceblue;">Useful Links</h5>   
                        <ul >
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Claim Insurance</a></li>
                       </ul>
                </div>
            </div>
                     
            </div>
			
             <center>
                <a style="text-align: center;align-items: center;"href="#" class="button1">Feedback</a>
                    <p style="color:antiquewhite ;font-style: italic;"> ©2020 AXA All Rights Reserved </p>
                <div style="text-align: right;color:#00bfff" >
                       <a href="#">Home &nbsp;</a>
                       <a href="#">Privacy Policy &nbsp; &nbsp;</a>
                       <a href="#">Terms & conditions &nbsp; &nbsp;</a>
                       <a href="#">Cookie policy &nbsp; &nbsp;</a>
                       <a href="#">Modern Slavery act&nbsp; &nbsp;</a>
                       <a href="#">Tax strategy &nbsp; &nbsp;</a>
                       <a href="#">Regulated &nbsp; &nbsp;</a>       
                </div>
            </center>S
            </div>
        <!-- ./Footer -->


</body>
</html>