<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style1.css">
<link rel="stylesheet" href="../css/registration.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/footer.css">
<script src="../js/script1.js"></script> 
<script src="../js/register.js"></script>
 <script src="../js/adminpage.js"></script>

<title> Update Registation-Recovery Person Details</title>
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

<h2 style="text-align: center">Registration Form For Insurance Plan</h2>

<ul class="reg">
  <li class="reg"><a href="registration.html">Personal  Details</a></li>
  <li class="reg"><a href="RegistrationEmployee.html">Current job and Income Information</a></li>
  <li class="reg"><a href="RegistrationMedical.html">Medical Condition</a></li>
  <li class="reg"><a href="">Insurance Recovery Person Details</a></li>
  <li class="reg"><a href="RegistrationDoc.html">Document</a></li>
</ul>

<div class="container">
  <form action="../php/Registrationedit.php" method="POST" onclick="return formvalidation()" name="personal">
    <div class="form-group">
      <label for="fname">First Name : </label>
      <input type="text" class="form-control" id="fname" name="fname">
    </div>
   <div class="form-group">
      <label for="lname">Last Name : </label>
      <input type="text" class="form-control" id="lname" name="lname">
 </div>
</div>
<br>

<div class="container">
    <div class="form-group">
      <label for="birthday">Date of Birth :</label>
      <input type="date" class="form-control" id="birthday" name="birthday">
  </div><br>
   <div class="form-group">
      <label for="gender">Gender :</label>
      <select name="gender" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
</div>

<br>

<div class="container">
    <div class="form-group">
      <label for="NIC">NIC Number :</label>
      <input type="text" class="form-control" id="nicNum" name="nicNum">
    </div>
   <div class="form-group">
      <label for="email">Email Address :</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
</div>
<br>

<p style="margin-left:15px"><b>Telephone</b></p>
<div class="container">
 
    <div class="form-group">
      <label for="mobile"> Mobile :</label>
      <input type="text" class="form-control" id="mobile" name="mobile"  maxlength="10">
    </div>
  
   <div class="form-group">
      <label for="home">Home :</label>
      <input type="text" class="form-control" id="home" name="home">
    </div>


</div>
<br>

<p style="margin-left:15px"><b>Address</b></p>
<div class="container">
 
    <div class="form-group">
      <label for="street1"> Street Address :</label>
      <input type="text" class="form-control" id="street1" name="street1" size="100">
    </div>
</div>
<div class="container">
    <div class="form-group">
      <label for="street2"> Street Address 02 :</label>
      <input type="text" class="form-control" id="street2" name="street2" size="100">
    </div>
</div>
<div class="container">
    <div class="form-group">
      <label for="city"> City :</label>
      <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="form-group">
      <label for="province"> State / Province:</label>
      <input type="text" class="form-control" id="province" name="province">
    </div>
</div>
<div class="container">
    <div class="form-group">
      <label for="pcode"> Postal Code :</label>
      <input type="text" class="form-control" id="pcode" name="pcode">
    </div>
</div>
<br>

  <input type="submit" value="Update Details">
</form>
	</div>

<br><br>

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
				</center>
            </div>
			
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
                <a style="text-align: center;align-items: center;"href="#" class="button1">Feedback</a>
                    <p style="color:antiquewhite ;font-style: italic;"> ©2020 AXA All Rights Reserved </p><br>
                <div style="text-align: right;color:blue" >
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
