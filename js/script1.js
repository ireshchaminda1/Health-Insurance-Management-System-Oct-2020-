function showSlides() 
{
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function loaddata(data) 
{
  if(data=="basic")
  {
    location.replace("../html/basic.html")
  }
  else if(data=="standerd")
  {
    location.replace("../html/standerd.html")
  }
  else if(data=="premium")
  {
    location.replace("../html/premium.html")
  }
}

function register() 
{
  location.replace("../html/registration.html");
}

function loginpage()
{
	location.replace("../html/login.html");
}

function backtohome()
{
	location.replace("../html/home.html");
}

