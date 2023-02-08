function loadData(name){
	if(name=="buttn1"){
	  document.getElementById("img1").src= "../img/doc1.jpg";
		 document.getElementById("para").innerHTML= "you can get more details by our agents by this feature .<br> <br>Home > request for individual consult > fill the form ";
		 document.body.style.backgroundColor = "#f3f3f3";
		 document.getElementById("data").style.backgroundImage= "url('../img/bac1.jpg')";
		 document.getElementById("data").style.backgroundSize = "700px 700px";
	}
	   else if(name=="buttn2"){
		  document.getElementById("img1").src= "../img/doc2.jpg";
			 document.getElementById("para").innerHTML= "You can claim your insuarance via online now .<br> you should do only simple thing Please follow the below instructions.<br><br>Home > claim insurance > fill the form";
			 document.body.style.backgroundColor = "#f3f3f3";
		 document.getElementById("data").style.backgroundImage= "url('../img/bac2.jpg')";
		 document.getElementById("data").style.backgroundSize = "700px 700px";
	     }
	       else if(name =="buttn3"){
		     document.getElementById("img1").src= "../img/intro.jpg";
				document.getElementById("para").innerHTML= "You can choose your insurance plans since age 25-55  <br> There are 3 plans<br> 01.basic 02.premium 03.platinum";
				document.getElementById("data").style.backgroundImage= "url('../img/bac3.jpg')";
				document.getElementById("data").style.backgroundSize = "700px 700px";
		   }	 
		   
		   else if(name =="buttn4"){
			document.getElementById("img1").src= "../img/cov.jpg";
			   document.getElementById("para").innerHTML= "You can see our coverage <br> click here : www.axa.coverage.lk";
			   document.getElementById("data").style.backgroundImage= "url('../img/bac4.jpg')";
				document.getElementById("data").style.backgroundSize = "700px 700px";
		  }	
		  else if(name =="buttn5"){
			document.getElementById("img1").src= "../img/branch.jpg";
			   document.getElementById("para").innerHTML= "Ambalantota,<br>No. 154Tissa Road <br>Ambalantota <br>Phone : 047 - 22 25 482 <br>Opening Hours :9.00 a.m. - 03.00 p.m <br><br>";
			   document.getElementById("data").style.backgroundImage= "url('../img/bac5.jpg')";
				document.getElementById("data").style.backgroundSize = "700px 700px";
		  }	
		  else if(name =="buttn6"){
			document.getElementById("img1").src= "../img/faq.png";
			   document.getElementById("para").innerHTML= "Question 01: what are the claiming methods ? <br> Answer : we are paying the claims by cheques and direct paying";
			   document.getElementById("data").style.backgroundImage= "url('../img/bac6.jpg')";
				document.getElementById("data").style.backgroundSize = "700px 700px";
		  }	
		 
		   else {
			   alert("invalid");
		   }
        }