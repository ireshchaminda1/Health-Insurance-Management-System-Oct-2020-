function enableButton()
{
  if(document.getElementById("privacy").checked)
  {
    document.getElementById("btsubmit").disabled=false;

  }
  else
  {
    document.getElementById("btsubmit").disabled=true;
    alert("please check the box")
  }
}



function validateForm() {
  var x = document.forms["myform"]["fname"].value;
  var y = document.forms["myform"]["fname2"].value;
  var z = document.forms["myform"]["fname3"].value;
  
  if (x == ""|| y=="") {
    alert("all fields must be filled out");
    return false;
  }
  else{
    alert("sucessfully submitted");
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
