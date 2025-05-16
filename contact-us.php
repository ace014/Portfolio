<?php
    session_start();
    $pageTitle = "Contact Us";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="shortcut icon" href="img/png/logo.png">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/contact-us.css">
    </head>
    <body>
        <main>
            <?php include("php/aside.php"); ?>
            <section id="mainContent">
                <span>CONNECT WITH US</span>
                <div>
                    <div>
                        <span>via email</span>
                        <a href="mailto:acejeraldgalvez@proton.me">Ace Jerald Galvez</a>
                        <a href="mailto:">Victor Brenth Symone Villaver</a>
                    </div>
                    <div>
                        <span>via phone number</span>
                        <a href="tel:+639631885100">Ace Jerald Galvez</a>
                        <a href="tel:+">Victor Brenth Symone Villaver</a>
                    </div>
                    <div>
                        <span>via facebook</span>
                        <a href="https://www.facebook.com/acejeraldgalvez">Ace Jerald Galvez</a>
                        <a href="https://www.facebook.com/">Victor Brenth Symone Villaver</a>
                    </div>
                    <div>
                        <span>via github</span>
                        <a href="https://github.com/ace014">Ace Jerald Galvez</a>
                        <a href="https://github.com/">Victor Brenth Symone Villaver</a>
                    </div>
                </div>
            </section>
        </main>
        <?php include("php/footer.php"); ?>
    </body>
</html>