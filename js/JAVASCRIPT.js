// Navigation Bar
// function toggleMenu() {
//     var x = document.getElementById("navMobile");
//     if (x.style.display === "grid") {
//       x.style.display = "none";
//     } else {
//       x.style.display = "grid";
//     }
//   }


  
// Animations
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

function revealLogo() {
    var reveals = document.querySelectorAll(".revealLogo");
  
    for (var j = 0; j < reveals.length; j++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[j].getBoundingClientRect().top;
      var elementVisible = 20;

      if (elementTop < windowHeight - elementVisible) {
        reveals[j].classList.add("active");
      }
    }
  }
   
  window.addEventListener("load", reveal);
  window.addEventListener("scroll", reveal);
  window.addEventListener("load", revealLogo);
  window.addEventListener("scroll", revealLogo);

  
 