function validateForm() {
    var x = document.forms["myform3"]["fname"].value;
    if (x == "") {
      alert("all fields must be filled out");
      return false;
    }
    else{
      window.alert("You are redirected to Billing details and submit for approvals");
       location.replace("../html/claims4.html");
      ;
    }
  }


  function linking(data)
{
  if(data=="h1")
  {
	window.alert("You are redirected to Paitient Details Page");
   location.replace("../html/claim page1.html");
  }
  
  else if(data=="h2")
  {
	window.alert("You are redirected to Insured Person Details Page");
   location.replace("../html/index2.html");
  }
  
  else if(data=="h3")
  {
	 window.alert("You are redirected to Illness/ Injury Details Page");
   location.replace("../html/claims3.html");
  }
  
   else if(data=="h4")
  {
	 window.alert("You are redirected to Billing Details and Submit for Approval Page");
    location.replace("../html/claims4.html");
  }
  
 
}
