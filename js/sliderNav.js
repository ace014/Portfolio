document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menuToggle");
    const sliderNav = document.getElementById("sliderNav");
  
    menuToggle.addEventListener("click", function () {
        sliderNav.classList.toggle("visible");
    });
});