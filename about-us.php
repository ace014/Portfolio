<?php
    session_start();
    $pageTitle = "About Us";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="shortcut icon" href="img/png/logo.png">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/about-us.css"> 
    </head>
    <body>
        <main>
            <?php include("php/aside.php"); ?>
            <section id="mainContent">
                <div id="initialContent">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    <img src="img/png/homeCarou1.png" alt="Image 1">
                </div>
                <div class="developer">
                    <img src="img/png/developer1.png" alt="Victor Image">
                    <div id="developerText">
                        <h3>Victor Brenth Symone Villaver</h3>
                        <h4>Specialty Title/Job Title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                        <a href="villaverPage.php">View My Portfolio</a>
                    </div>
                </div>
                <div class="developer">
                    <img src="img/png/developer2.png" alt="Ace Image">
                    <div id="developerText">
                        <h3>Ace Jerald Galvez</h3>
                        <h4>Specialty Title/Job Title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                        <a href="galvezPage.php">View My Portfolio</a>
                    </div>
                </div>
            </section>
        </main>
        <?php include("php/footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script>
          document.addEventListener("DOMContentLoaded", function() {
            const content = document.querySelector("#initialContent");
            
            const particlesDiv = document.createElement("div");
            particlesDiv.id = "particles-js";
            particlesDiv.style.position = "absolute";
            particlesDiv.style.top = "0";
            particlesDiv.style.left = "0";
            particlesDiv.style.width = "100%";
            particlesDiv.style.height = "100%";
            particlesDiv.style.pointerEvents = "none"; 
            particlesDiv.style.zIndex = "1";
            
            content.appendChild(particlesDiv);

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