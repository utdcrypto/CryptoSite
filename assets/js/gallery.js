var slideIndex = 1;
showSlides(slideIndex);
automaticGallery();
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

//user-guided slides
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("image-slides");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  
  slides[slideIndex-1].style.display = "block"; 
}

//automatic slider
function automaticGallery() {
  var i;
  var slides = document.getElementsByClassName("image-slides");

  for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}

  slides[slideIndex-1].style.display = "block";

  setTimeout(automaticGallery, 8000); // Change image every 10 seconds
}