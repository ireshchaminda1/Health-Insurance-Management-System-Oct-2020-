<!doctype html>
<html>
<head>
  <title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../js/script.js"></script>
 <script src="../js/login.js"></script>

<title>Health Insurance Management System-Home</title>
</head>

<body>
<!-- Header -->
	<div class="header">
    <img class="float" src="../img/logo.png" style="width:200px;height:150px;margin-left:100px;"><center>
  <h2>AXA Health Insurance Management<br>System</h2></center>
      <p align="right"><button class="w3-button w3-border w3-hover-blue">Log In / Sign In</button></p>
	</div>
    
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">Request Individual Consult</a>
  <a href="#contact">Claim Insurance</a>
  <a href="#about">About Us</a>
  <a href="#contact">Contact Us</a>

</div>
<!-- End of Header -->
<br>

<center>
    <div class="login-box">
      <center>
      <img src="../img/images.png" class="download" >
      </center>
     
        <div class="formbox">
          <div id="error"></div>
          <form name="login" id ="form"  method="POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <p>Enter your Email </p>
            <input type="text" name="mails" id="username"  placeholder=" Enter User Name">
            <p>new Password</p>
            <input type="Password" name="password" id="password" placeholder="Enter Password">
            <p>Re -enter Password</p>
            <input type="Password" name="passwordre" id="password" placeholder="Enter Password">
            <br><br>
            <input type="submit" name="btsubmit" value="Change the password"  id= "submit" >
           ___________________________________
           <br><br>

           <div class="new">
          
           </div>
          </form> 
        </div> 
      </div>
    </center>
    

<?php

require 'config.php';

if(isset($_POST['btsubmit'])){


$uname=$_POST['mails'];
$pw=$_POST['passwordre'];


$sql="UPDATE signup SET password='$pw' WHERE email='$uname'";

if($conn->query($sql)){
    echo"<script type='text/javascript'>
    alert('sucessfully updated');
    window.location='../html/login.html';
    </script>";
}
else{
    echo"error".$conn->connect_error;
}



}

$conn->close();


?>




	<br>

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
                            <li><a href="../html/claimsinfo.html">Claim Insurance</a></li>
                       </ul>
                        </div>
                        
                    </div>
                     
                </div>
                     <center>
                        <a style="text-align: center;align-items: center;"href="#" class="button1">Feedback</a>
                       <p style="color:antiquewhite ;font-style: italic;"> ©2020 AXA All Rights Reserved </p>

                             <div style="text-align: right; color:blue;" >
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
                </div>
            </div>
            
                    
                       
                  

                
                
                            
        
    
                	
            
    
        <!-- ./Footer -->


</body>
</html>
