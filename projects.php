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
                <h2>OUR PROJECTS</h2>
                <p>LIST OF PROJECTS</p>
                <div></div>
            </section>
        </main>
        <?php include("php/footer.php"); ?>
    </body>
</html>