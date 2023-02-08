<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/claim.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../js/script.js"></script>
<script src="../js/claim.js"></script>


<title>Health Insurance Management System-Home</title>
</head>

<body>

	<div class="header">
    <img class="float" src="../img/logo.png" style="width:200px;height:150px;margin-left:100px;"><center>
  <h1 style="text-shadow:1px 1px 0 #444">AXA Health Insurance Management<br>System</h1></center>
      <p align="right"><button class="w3-button w3-border w3-hover-blue">Log In / Sign In</button></p>
	</div>
    
<div class="topnav">
  <a href="#home">Home</a>
  <a href="#about">Request Individual Consult</a>
  <a class="active"  href="#contact">Claim Insurance</a>
  <a href="#about">About Us</a>
  <a href="#contact">Contact Us</a>
</div>

<br>
<center>
<ul class="navig">
    <li ><a onclick="linking('h1')" href="#claims1.html">Patient Details</a></li>
    <li class="active"><a onclick="linking('h2')"  href="#">Insured person Details</a></li>
    <li><a onclick="linking('h3')"  href="#claims3.html">Illness/Injury Details</a></li>
    <li> <a onclick="linking('h4')" href="#claims4.html">Billing and Submit for Approvals</a></li>

</ul>
<script>

let ul = document.querySelector('ul');
var li = document.querySelectorAll('li');

li.forEach(el => {

    el.addEventListener('click', function(){
    ul.querySelector('.active').classList.remove('active');
     
         el.classList.add('active');
     }); 			
});

</script>

</center>
<br> </br></br></br></br>





<div class="container">
<center>
<form action="claimedit.php"   method="POST" class="form3" name="claim" onsubmit="return validateForm()>
    <br>
    <label for="idnumber">Insured's ID number</label> </br>
    <input type="number" name="id">  </br></br>

        <label for="pnumber">Insured's policy number</label> </br>
    
        <input type="number" name="pnum" > 
        
        </br></br>
    
        
    <label for="name">Insured's name</label> </br>
    
        <input type="text" id="name1" name="fname1" placeholder="Firstname"><br><br>
		<input type="text" id="name2" name="fname2" placeholder="Lastname">
        
        </br></br>
    
            
    
              <label for="dates">Insured's birth date </label> </br>
    <input type="date" id="dates"  name="dates">
        
        </br></br>
    
               <label for="gender">Patient's sex </label> </br>

       <input type="radio" id="male" name="gender" value="male">
	   <label for="male">Male</label><br>
	   <input type="radio" id="female" name="gender" value="female">
	   <label for="female">Female</label><br>
	   <input type="radio" id="other" name="gender" value="other">
	   <label for="other">Other</label>
	  
	  <br><br>
	  
				<label for="address"> Insured's Address</label><br>
				<input type="text" id="street1" name="street1" placeholder="Stret address" ><br>
				<input type="text" id="street2" name="street2" placeholder="Stret address line 2" ><br>
				<input type="text" id="city" name="city" placeholder="City" ><br>
				<input type="text" id="province" name="province" placeholder="State/Province" ><br>
				<input type="number" id="pcode" name="pcode" placeholder="Postal cade" ><br>
             <br><br>
                <label for="tnumber">Insured's Phone Number</label><br>
				<input type="tel" id="tnumber" name="tnumber" placeholder="Mobile number" pattern="[0-9]{10}"><br> 
				<input type="tel" id="tnumber1" name="tnumber1" placeholder="Home" pattern="[0-9]{10}"><br><br>
                <label for="planname"> Insured's insurane plan name</label><br>
				<input type="text" id="plan" name="plan"><br><br>
				
				<a href="#" class="previous"> Back</a> 
                <input type="Submit"  class="next" value="Next" name="btsubmit" >
                
              </form>
  </center>
</div>

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
                            <li><a href="#">Claim Insurance</a></li>
                       </ul>
                        </div>
                        
                    </div>
                     
                </div>
                     <center>
                        <a style="text-align: center;align-items: center;"href="#" class="button1">Feedback</a>
                       <p style="color:antiquewhite ;font-style: italic;"> ©️2020 AXA All Rights Reserved </p>

                             <div style="text-align:right;color:blue;" >
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