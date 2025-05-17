<?php
    session_start();
    $pageTitle = "Our Portfolio";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="shortcut icon" href="img/png/logo.png">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/carousel_fade_fullAuto.css">
    </head>
    <body>
        <main>
            <?php include("php/aside.php"); ?>
            <section id="mainContent">
                <div class="carousel">
                    <div id="title">
                        <h3>Years of Cooperation and Partnership</h3>
                        <p>Welcome to our Portfolio</p>
                    </div>
                    <div id="content">
                        <img src="img/png/homeCarou1.png" alt="Image 1">
                        <img src="img/png/homeCarou2.png" alt="Image 2">
                        <img src="img/png/homeCarou3.png" alt="Image 3">
                        <img src="img/png/homeCarou4.png" alt="Image 4">
                        <img src="img/png/homeCarou5.png" alt="Image 5"> 
                    </div>
                </div>
            </section>
        </main>
        <?php include("php/footer.php"); ?>
        <script src="js/carousel_fade_fullAuto.js"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script>
          document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector(".carousel");
            
            const particlesDiv = document.createElement("div");
            particlesDiv.id = "particles-js";
            particlesDiv.style.position = "absolute";
            particlesDiv.style.top = "0";
            particlesDiv.style.left = "0";
            particlesDiv.style.width = "100%";
            particlesDiv.style.height = "100%";
            particlesDiv.style.pointerEvents = "none"; 
            particlesDiv.style.zIndex = "1";
            
            carousel.appendChild(particlesDiv);

            particlesJS("particles-js", {
              "particles": {
                "number": {
                  "value": 250,
                  "density": {
                    "enable": true,
                    "value_area": 800
                  }
                },
                "color": {
                  "value": "#F9B300"
                },
                "shape": {
                  "type": "circle"
                },
                "opacity": {
                  "value": 0.6,
                  "random": true
                },
                "size": {
                  "value": 3,
                  "random": true
                },
                "line_linked": {
                  "enable": false
                },
                "move": {
                  "enable": true,
                  "speed": 1,
                  "direction": "top",
                  "random": true,
                  "straight": false,
                  "out_mode": "out"
                }
              },
              "interactivity": {
                "detect_on": "canvas",
                "events": {
                  "onhover": {
                    "enable": false
                  },
                  "onclick": {
                    "enable": false
                  },
                  "resize": true
                }
              },
              "retina_detect": true
            });
          });
        </script>
    </body>
</html>
