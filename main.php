<?php
require 'options.php';
require 'content.php';
require 'images.php';
?>

<!DOCTYPE html>
<html lang=<?php $language ?>>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/54/54346.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo $name ?></title>
</head>
<body>
    <header>
    <?php echo $v ?>
        <h1><?php echo $name ?></h1>
    </header>
    <div id="composition">
        <nav>
            <h3>Menu</h3>
            <?php include 'menu.php' ?>
        </nav>
        <main>
            <section>
                <h2 id="main">Main</h2>
                <article>
                    <p><?php echo $p ?></p>
                </article>
            </section>
            <section>
                <h2 id="aboutSite">About Site</h2>
                <article>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.</p>
                </article>
            </section>
            <section>
                <h2 id="createdProjects">Created Projects</h2>
                <article>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium.</p>
                </article>
            </section>
        </main>
        <?php include 'aside.php' ?>
    </div>
    <footer>
        <p>Site created by HTML&CSS&PHP</p>
        <?php echo $php.$v ?>
        <address>
            <?php $address ?>
            <?php $number = 23 + 4; echo $number; ?>
        </address>
    </footer>
</body>
</html>