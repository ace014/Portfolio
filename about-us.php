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
                        <h3>Victor Brenth Symone R. Villaver</h3>
                        <h4>Specialty Title/Job Title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                        <a href="">View My Portfolio</a>
                    </div>
                </div>
                <div class="developer">
                    <img src="img/png/developer2.png" alt="Ace Image">
                    <div id="developerText">
                        <h3>Ace Jerald Galvez</h3>
                        <h4>Specialty Title/Job Title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                        <a href="">View My Portfolio</a>
                    </div>
                </div>
            </section>
        </main>
        <?php include("php/footer.php"); ?>
    </body>
</html>