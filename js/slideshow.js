// Function to display slides in a slideshow automatically
function showSlides() {
    // Get all elements with the class "mySlides"
    var slides = document.getElementsByClassName("mySlides");
  
     for(let i = 0; i < slides.length; i++){
        slides[i].style.display="none";
     }
  
     slides[slideIndex].style.display="block";
  
     slideIndex = (slideIndex+1) % slides.length;
  
  
    // Call this function recursively after 5000 milliseconds (5 seconds)
    setTimeout(showSlides, 5000); 
  }
  
  var slideIndex = 0;
  showSlides();