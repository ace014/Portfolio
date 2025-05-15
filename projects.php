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
                <a class="project">
                    <img src="img/png/homeCarou1.png" alt="Image 1">
                    <div class="projectText">
                        <h2>Project Title 1</h2>
                        <p>Description of the project goes here. This is a brief overview of what the project is about.</p>
                    </div>
                </a>
                <a class="project">
                    <img src="img/png/homeCarou2.png" alt="Image 2">
                    <div class="projectText">
                        <h2>Project Title 2</h2>
                        <p>Description of the project goes here. This is a brief overview of what the project is about.</p>
                    </div>
                </a>
                <a class="project">
                    <img src="img/png/homeCarou3.png" alt="Image 3">
                    <div class="projectText">
                        <h2>Project Title 3</h2>
                        <p>Description of the project goes here. This is a brief overview of what the project is about.</p>
                    </div>
                </a>
                <a class="project">
                    <img src="img/png/homeCarou4.png" alt="Image 4">
                    <div class="projectText">
                        <h2>Project Title 4</h2>
                        <p>Description of the project goes here. This is a brief overview of what the project is about.</p>
                    </div>
                </a>
                <a class="project">
                    <img src="img/png/homeCarou5.png" alt="Image 5">
                    <div class="projectText">
                        <h2>Project Title 5</h2>
                        <p>Description of the project goes here. This is a brief overview of what the project is about.</p>
                    </div>
                </a>
                <a class="project">
                    <img src="img/png/homeCarou1.png" alt="Image 6">
                    <div class="projectText">
                        <h2>Project Title 6</h2>
                        <p>Description of the project goes here. This is a brief overview of what the project is about.</p>
                    </div>
                </a>
            </section>
        </main>
        <?php include("php/footer.php"); ?>
    </body>
</html>