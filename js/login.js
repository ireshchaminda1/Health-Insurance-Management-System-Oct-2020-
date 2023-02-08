function ValidateEmail(inputText)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{
alert(" you entered Valid email address! ");
document.login.username.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.login.username.focus();
window.location="../html/login.html";
return false;

}
}

function validateform(){  
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