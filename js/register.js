function enableButton()
{
  if(document.getElementById("privacy").checked)
  {
    document.getElementById("btsubmit").disabled=false;
  }
  else
  {
    document.getElementById("btsubmit").disabled=true;
  }
}

function sendmail() 
{
	window.alert("Go to www.Gmail.com");
    location.replace("https://www.gmail.com")
}

function linktoweb(data)
{
  if(data=="employee")
  {
	window.alert("Go to Current Job and Income Information Form Page");
   location.replace("../html/RegistrationEmployee.html");
  }
  
  else if(data=="medical")
  {
	window.alert("Go to Medical Condition Form Page");
   location.replace("../html/RegistrationMedical.html");
  }
  
  else if(data=="recover")
  {
	 window.alert("Go toInsurance Recovery Person Details Form Page");
   location.replace("../html/RegistationRecovery.html");
  }
  
   else if(data=="doc")
  {
	 window.alert("Go to Document Page");
    location.replace("../html/RegistrationDoc.html");
  }
  
  else if(data=="personal")
  {
	 window.alert("Go to Personal Details Form Page");
    location.replace("../html/registration.html");
  }
}

function formvalidation() 
{
    var namecheck = document.forms["personal"]["fname"].value;
    if (namecheck == "") {
      alert("All Fields Must Be Filled Out");
      return false;
    }
    else{
      alert("Sucessfully Submitted");
    }
	
	var niccheck = document.forms["personal"]["nicNum"].value;
    if (niccheck == "") {
      alert("All Fields Must Be Filled Out");
      return false;
    }
    else{
      alert("Sucessfully Submitted");
    }
	
	var mobile = document.forms["personal"]["mobile"].value;
    if (mobile == "") {
      alert("All Fields Must Be Filled Out");
      return false;
    }
    else
	{
      alert("Sucessfully Submitted");
    }
	
	var claimcheck = document.forms["claim"]["claimnicNum"].value;
    if (claimcheck == "") {
      alert("All Fields Must Be Filled Out");
      return false;
    }
    else
	{
      alert("Sucessfully Submitted");
    }
	
	var emp = document.forms["employer"]["employername"].value;
    if (emp == "") {
      alert("All Fields Must Be Filled Out");
      return false;
    }
    else
	{
      alert("Sucessfully Submitted");
    }
}