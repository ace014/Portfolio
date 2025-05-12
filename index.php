<?php
    session_start();
    $pageTitle = "Our Portfolio Website";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="css/base.css">
    </head>
    <body>
        <main>
            <?php include("php/aside.php"); ?>
            <section id="mainContent">
                
            </section>
        </main>
        <?php include("php/footer.php"); ?>
    </body>
</html>
