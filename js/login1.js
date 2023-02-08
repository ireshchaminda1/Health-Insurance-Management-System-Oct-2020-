function Validate(inputText)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{
alert("Valid email address! and you sucessfully logged in");
document.login.username.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.login.username.focus();
return false;
}
}

function form(){  
    var name=document.login.username.value;  
    var password=document.login.password.value;  
      
    if (username==null || username==""){  
      alert("Name can't be blank");  
      return false;  
    }else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    }  