/*Navigation Bar*/
function toggleMenu() {
    var x = document.getElementById("navMobile");
    if (x.style.display === "grid") {
      x.style.display = "none";
    } else {
      x.style.display = "grid";
    }
  }
  
  /*Animations*/
  function reveal() {
      var reveals = document.querySelectorAll(".reveal");
    
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 20;
  
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        }
      }
    }
    window.addEventListener("load", reveal);
    window.addEventListener("scroll", reveal);
  
  /*Modals (Zodiac Page)*/
  var modal = document.getElementsByClassName('modal');
  var btn = document.getElementsByClassName("btn");
  var span = document.getElementsByClassName("close");
  
  /*Buttons (Open)*/ 
  btn[0].onclick = function() {
    modal[0].style.display = "grid";
  }
  btn[1].onclick = function() {
    modal[1].style.display = "grid";
  }
  btn[2].onclick = function() {
    modal[2].style.display = "grid";
  }
  btn[3].onclick = function() {
    modal[3].style.display = "grid";
  }
  btn[4].onclick = function() {
    modal[4].style.display = "grid";
  }
  btn[5].onclick = function() {
    modal[5].style.display = "grid";
  }
  btn[6].onclick = function() {
    modal[6].style.display = "grid";
  }
  btn[7].onclick = function() {
    modal[7].style.display = "grid";
  }
  btn[8].onclick = function() {
    modal[8].style.display = "grid";
  }
  btn[9].onclick = function() {
    modal[9].style.display = "grid";
  }
  btn[10].onclick = function() {
    modal[10].style.display = "grid";
  }
  btn[11].onclick = function() {
    modal[11].style.display = "grid";
  }
  
  /*Closing the modals*/
  span[0].onclick = function() {
    modal[0].style.display = "none";
  }
  span[1].onclick = function() {
    modal[1].style.display = "none";
  }
  span[2].onclick = function() {
    modal[2].style.display = "none";
  }
  span[3].onclick = function() {
    modal[3].style.display = "none";
  }
  span[4].onclick = function() {
    modal[4].style.display = "none";
  }
  span[5].onclick = function() {
    modal[5].style.display = "none";
  }
  span[6].onclick = function() {
    modal[6].style.display = "none";
  }
  span[7].onclick = function() {
    modal[7].style.display = "none";
  }
  span[8].onclick = function() {
    modal[8].style.display = "none";
  }
  span[9].onclick = function() {
    modal[9].style.display = "none";
  }
  span[10].onclick = function() {
    modal[10].style.display = "none";
  }
  span[11].onclick = function() {
    modal[11].style.display = "none";
  }
  
  /*Also closing the modals*/
  window.onclick = function(event) {
      if (event.target == modal[0]) {
          modal[0].style.display = "none";
       }
      if (event.target == modal[1]) {
          modal[1].style.display = "none";
       }  
      if (event.target == modal[2]) {
          modal[2].style.display = "none";
          }
      if (event.target == modal[3]) {
          modal[3].style.display = "none";
          }
      if (event.target == modal[4]) {
          modal[4].style.display = "none";
          }
      if (event.target == modal[5]) {
          modal[5].style.display = "none";
      }
      if (event.target == modal[6]) {
          modal[6].style.display = "none";
      }  
      if (event.target == modal[7]) {
          modal[7].style.display = "none";
      }
      if (event.target == modal[8]) {
          modal[8].style.display = "none";
      }
      if (event.target == modal[9]) {
          modal[9].style.display = "none";
      }
      if (event.target == modal[10]) {
          modal[10].style.display = "none";
      }
      if (event.target == modal[11]) {
          modal[11].style.display = "none";
      }  
  }
  
  /*The Great Race (Zodiac Page)*/
  let slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slideshow");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "grid";
  }