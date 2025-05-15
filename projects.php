<?php
    session_start();
    $pageTitle = "Our Projects";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="shortcut icon" href="img/png/logo.png">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/projects.css"> 
    </head>
    <body>
        <main>
            <?php include("php/aside.php"); ?>
            <section id="mainContent">
                <div id="topContent">
                    <p>LIST OF OUR PROJECTS TOGETHER</p>
                    <button id="upButton">
                        <div class="upArrow"></div>
                    </button>
                </div>
                <div id="midContent">
                    <div id="projectSlider">
                        <div class="project">
                            <div id="projectImg">
                                <img src="img/png/homeCarou1.png" alt="Project 1">
                            </div>
                            <div id="projectDesc">
                                <h2>Project 1 Title</h2>
                                <p>
                                    Date: Month Day, Year
                                    <br><br>
                                    Lorem ipsum dolor sit amet. Qui nihil commodi est mollitia nostrum ut consequatur quos. Et sapiente enim aut consectetur magni aut amet omnis. Eos velit vero aut aliquam natus et quisquam temporibus qui voluptates velit qui quibusdam recusandae vel repudiandae dignissimos quo illum dolorem.
                                </p>
                            </div>
                        </div>
                        <div class="project">
                            <div id="projectImg">
                                <img src="img/png/homeCarou2.png" alt="Project 2">
                            </div>
                            <div id="projectDesc">
                                <h2>Project 2 Title</h2>
                                <p>
                                    Date: Month Day, Year
                                    <br><br>
                                    Lorem ipsum dolor sit amet. Qui nihil commodi est mollitia nostrum ut consequatur quos. Et sapiente enim aut consectetur magni aut amet omnis. Eos velit vero aut aliquam natus et quisquam temporibus qui voluptates velit qui quibusdam recusandae vel repudiandae dignissimos quo illum dolorem.
                                </p>
                            </div>
                        </div>
                        <div class="project">
                            <div id="projectImg">
                                <img src="img/png/homeCarou3.png" alt="Project 2">
                            </div>
                            <div id="projectDesc">
                                <h2>Project 3 Title</h2>
                                <p>
                                    Date: Month Day, Year
                                    <br><br>
                                    Lorem ipsum dolor sit amet. Qui nihil commodi est mollitia nostrum ut consequatur quos. Et sapiente enim aut consectetur magni aut amet omnis. Eos velit vero aut aliquam natus et quisquam temporibus qui voluptates velit qui quibusdam recusandae vel repudiandae dignissimos quo illum dolorem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="botContent">
                    <button id="downButton">
                        <div class="downArrow"></div>
                    </button>
                </div>
            </section>
        </main>
        <?php include("php/footer.php"); ?>
        <script>
            const upButton = document.getElementById("upButton");
            const downButton = document.getElementById("downButton");
            const projectSlider = document.getElementById("projectSlider");
            const projects = document.querySelectorAll(".project");
            let currentIndex = 0;

            function updateSlider() {
                const offset = -currentIndex * 50; 
                projectSlider.style.transform = "translateY(" + offset + "vh)";
            }

            upButton.addEventListener("click", () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSlider();
                }
            });

            downButton.addEventListener("click", () => {
                if (currentIndex < projects.length - 1) {
                    currentIndex++;
                    updateSlider();
                }
            });
        </script>
    </body>
</html>