function validate() {
    var x = document.forms["fm"]["fname"].value;
    if (x == "") {
      alert("all fields must be filled out");
      return false;
    }
    else{
      window.alert("filled properly");
       
      
    }
  }
  
  function alidate()
{
  if(document.getElementById("fg").checked)
  {
    document.getElementById("fg").disabled=false;

  }
  else
  {
    document.getElementById("fg").disabled=true;
    alert("please check the box")
  }
}