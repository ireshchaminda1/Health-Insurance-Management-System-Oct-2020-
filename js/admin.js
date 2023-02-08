function loadpage(data) 
{
  if(data=="personal")
  {
    location.replace("../php/showpersonal.php")
  }
  else if(data=="medical")
  {
    location.replace("../php/showmedical.php")
  }
  else if(data=="claim1")
  {
    location.replace("../php/showemployee.php")
  }
   else if(data=="user")
  {
    location.replace("../php/showsignup.php")
  }
  else if(data=="feedback")
  {
		location.replace("../php/FBselect.php")
	}
	else if(data=="consult")
	{
		location.replace("../php/conselect.php")
	}
	else if(data=="claim")
	{
		location.replace("../php/claimselect.php")
	}
	else if(data=="recovery")
	{
		location.replace("../php/Registrationselect.php")
	}
	else if(data=="contact")
	{
		location.replace("../php/cont.php")
	}
	else if(data=="claim2")
	{
		location.replace("../php/claim1admin.php")
	}
	else if(data=="claim3")
	{
		location.replace("../php/claim3admin.php")
	}
	else if(data=="claim4")
	{
		location.replace("../php/claim4admin.php")
	}
	 else if(data=='login')
  {
	location.replace("../php/logindetailsadmin.php")
  }
}

function editpage(data) 
{
  if(data=="personal")
  {
    location.replace("../php/editperonal.php")
  }
  else if(data=="emp")
  {
    location.replace("../php/editemployee.php")
  }
  else if (data=='feedback')
  {
	location.replace("../php/FBedit1.php")
  }
  else if(data=='consult')
  {
	location.replace("../php/conedit1.php")
  }
	else if(data=='claim')
  {
	location.replace("../php/claimedit1.php")
  }
  else if(data=='recovery')
  {
	location.replace("../php/Registrationedit1.php")
  }
  else if(data=='contact')
  {
	location.replace("../php/cont.php")
  }
}

function backtoadmin()
{
	location.replace("../php/phphome.php")
}
	