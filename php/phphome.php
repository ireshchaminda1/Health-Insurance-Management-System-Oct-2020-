<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style1.css">
<link rel="stylesheet" href="../css/registration.css">
<link rel="stylesheet" href="../css/cssphphome.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/footer.css">
<script src="../js/script1.js"></script>
<script src="../js/register.js"></script> 
<script src="../js/admin.js"></script> 
<script src="../js/admin1.js"></script> 

<title>Admin-Dashboard</title>
</head>

<body>

<!--Header-->

<div class="header">
    <img class="float" src="../img/logo.png" style="width:200px;height:150px;margin-left:100px;">
	<center> <h2>AXA Health Insurance Management<br>System</h2> </center>
    <p align="right"><button class="w3-button w3-border w3-hover-blue" onclick="loginpage()">Log In / Sign In</button></p>
</div>
    
<div class="menubar">
  <a class="active" href="../html/home.html">Home</a>
  <a href="../html/index2.html">Request Individual Consult</a>
  <a href="../html/claimsinfo.html">Claim Insurance</a>
  <a href="../html/aboutus.html">About Us</a>
  <a href="../html/contact us.html">Contact Us</a>
</div>

<!--End of Header-->

<br>
<center>

<button class="phpbutton" id="personal" onclick="loadpage('personal')">View Registered Personal Details</button><br><br>
<button class="phpbutton" id="medical" onclick="loadpage('medical')">View Registered Medical Details</button><br><br>
<button class="phpbutton" id="claim" onclick="loadpage('claim1')">View Registered User's Employment Details</button><br><br>
<button class="phpbutton" id="user" onclick="loadpage('recovery')">View Recovery Person Details</button><br><br>
<hr style="border-top: 5px solid black">
<button class="phpbutton" id="user" onclick="loadpage('user')">View New User Details</button><br><br>
<button class="phpbutton" id="user" onclick="loadpage('login')">View User Login Data</button><br><br>
<hr style="border-top: 5px solid black">
<button class="phpbutton" id="feedback" onclick="loadpage('feedback')">View Customer's Feedback Details</button><br><br>
<button class="phpbutton" id="consult" onclick="loadpage('consult')">View Customer's Consultation Details</button><br><br>
<button class="phpbutton" id="consult" onclick="loadpage('contact')">View Request Contact Data From Customer </button><br><br>
<hr style="border-top: 5px solid black">
<button class="phpbutton" id="claim" onclick="loadpage('claim2')">View Claim Patient Details</button><br><br>
<button class="phpbutton" id="claim" onclick="loadpage('claim')">View Insuraed Person Details</button><br><br>
<button class="phpbutton" id="claim" onclick="loadpage('claim3')">View Injury Details</button><br><br>
<button class="phpbutton" id="claim" onclick="loadpage('claim4')">View Claim Billing Details</button><br><br>

</center>


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
                    <li><a href="../html/home.html">Home</a></li>
                    <li><a href="../html/index2.html">Request individual consult</a></li>     
                </ul>
            </div>
            </center>
			
            <div style="float:right;"class="footer-items3">
                <div style="float:right;">
                     <h5 style="color: aliceblue;">Useful Links</h5>   
                        <ul >
                            <li><a href="../html/aboutus.html">About Us</a></li>
                            <li><a href="../html/contact us.html">Contact Us</a></li>
                            <li><a href="../html/claimsinfo.html">Claim Insurance</a></li>
                       </ul>
                </div>
            </div>
                     
            </div>
			
             <center>
                <a style="text-align: center;align-items: center;"href="../html/index.html" class="button1">Feedback</a>
                    <p style="color:antiquewhite ;font-style: italic;"> ©2020 AXA All Rights Reserved </p><br>
                <div style="text-align: right;color:blue">
                       <a href="../html/home.html">Home &nbsp;</a>
                       <a href="#">Privacy Policy &nbsp; &nbsp;</a>
                       <a href="#">Terms & conditions &nbsp; &nbsp;</a>
                       <a href="#">Cookie policy &nbsp; &nbsp;</a>
                       <a href="#">Modern Slavery act&nbsp; &nbsp;</a>
                       <a href="#">Tax strategy &nbsp; &nbsp;</a>
                       <a href="#">Regulated &nbsp; &nbsp;</a>       
                </div>
            </center>
            </div>
        <!-- ./Footer -->

</body>
</html>
