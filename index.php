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
        <script src="js/carousel_fade_fullAuto.js"></script> <!-- Add this line -->
    </body>
</html>
