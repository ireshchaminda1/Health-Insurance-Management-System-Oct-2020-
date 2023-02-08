function checkPassword()
{
  if(document.getElementById("password").value != document.getElementById("repassword").value)
  {
    alert("Password Mismatch");
    return false;
  }
  else
  {
    alert("Success!");
    return true;
  }
}

function validateform()
{  
    var name=document.signup.username.value;  
    var password=document.signup.password.value;  
      
    if (username==null || username=="")
	{  
      alert("Name can't be blank");  
      return false;  
    }
	else if(password.length<6)
	{  
      alert("Password must be at least 6 characters long.");  
      return false;  
    }  
} 

function ValidateEmail(inputText)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{
alert("Valid email address! and you sucessfully logged in");
document.signup.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.signup.email.focus();
return false;
}
} 
