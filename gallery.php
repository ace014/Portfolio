<?php
    session_start();
    $pageTitle = "Our Gallery";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="shortcut icon" href="img/png/logo.png">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/gallery.css"> 
    </head>
    <body>
        <main>
            <?php include("php/aside.php"); ?>
            <section id="mainContent">
                <a class="photo">
                    <img src="img/png/homeCarou1.png" alt="Image 1">
                    <div class="photoText">
                        <h2>Photo Title 1</h2>
                    </div>
                </a>
                <a class="photo tall">
                    <img src="img/png/homeCarou2.png" alt="Image 2">
                    <div class="photoText">
                        <h2>Photo Title 2</h2>
                    </div>
                </a>
                <a class="photo">
                    <img src="img/png/homeCarou3.png" alt="Image 3">
                    <div class="photoText">
                        <h2>Photo Title 3</h2>
                    </div>
                </a>
                <a class="photo wide">
                    <img src="img/png/homeCarou4.png" alt="Image 4">
                    <div class="photoText">
                        <h2>Photo Title 4</h2>
                    </div>
                </a>
                <a class="photo">
                    <img src="img/png/homeCarou5.png" alt="Image 5">
                    <div class="photoText">
                        <h2>Photo Title 5</h2>
                    </div>
                </a>
                <a class="photo">
                    <img src="img/png/homeCarou1.png" alt="Image 6">
                    <div class="photoText">
                        <h2>Photo Title 6</h2>
                    </div>
                </a>
            </section>
        </main>
        <?php include("php/footer.php"); ?>
    </body>
</html>