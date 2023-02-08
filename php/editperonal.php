<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/registration.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/footer.css">
<script src="../js/script.js"></script>
<script src="../js/register.js"></script> 

<title>Update Personal Details</title>
</head>

<body>

<!--Header-->

<div class="header">
    <img class="float" src="../img/logo.png" style="width:200px;height:150px;margin-left:100px;">
	<center> <h2>AXA Health Insurance Management<br>System</h2> </center>
    <p align="right"><button class="w3-button w3-border w3-hover-blue">Log In / Sign In</button></p>
</div>
    
<div class="menubar">
  <a class="active" href="#home">Home</a>
  <a href="#about">Request Individual Consult</a>
  <a href="#contact">Claim Insurance</a>
  <a href="#about">About Us</a>
  <a href="#contact">Contact Us</a>
</div>

<!--End of Header-->

<br>

<div class="container">
<form action="../php/editperonal1.php" method="POST">
    <div class="form-group">
      <label for="NIC">NIC Number :</label>
      <input type="text" class="form-control" id="nicnum" name="nicnum" size="100">
    </div>
</div>

<div class="container">
    <div class="form-group">
      <label for="fname">First Name :</label>
      <input type="text" class="form-control" id="fname" name="fname" size="100">
    </div>
</div>
<br>

<div class="container">
    <div class="form-group">
      <label for="lname">Last Name :</label>
      <input type="text" class="form-control" id="lname" name="lname" size="100">
    </div>
</div>
<br>


<div class="container">
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="text" class="form-control" id="email" name="email" size="100">
    </div>
</div>
<br>


<div class="container">
    <div class="form-group">
      <label for="home">Home :</label>
      <input type="text" class="form-control" id="home" name="home" size="100">
    </div>
</div>
<br>


<div class="container">
    <div class="form-group">
      <label for="mobile">Mobile :</label>
      <input type="text" class="form-control" id="mobile" name="mobile" size="100">
    </div>
</div>

<div class="container">
    <div class="form-group">
      <label for="city">City :</label>
      <input type="text" class="form-control" id="city" name="city" size="100">
    </div>
</div>
<br>

  <input type="submit" value="Update Details">
</form>

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
                    <li><a href="home.html">Home</a></li>
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
                    <p style="color:antiquewhite ;font-style: italic;"> ©2020 AXA All Rights Reserved </p><br>
                <div style="text-align: right;color:blue">
                       <a href="home.html">Home &nbsp;</a>
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
