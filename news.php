<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Junior Test</title>
        <link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/slider.css">
        <link rel="stylesheet" type="text/css" href="css/newsPage.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        
        <style>#news p {height: auto}</style>

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <body>
        <div id="site-container">
            <?php
            // Loading init.php file that initializes every class and configuration
            require '/init/init.php';

            include 'view/HeaderView.php';

            include 'view/SingleNewsView.php';
            include 'view/LikeLoginView.php';
            include 'view/FooterView.php';
            ?>
        </div>
        <script src="js/jquery.sldr.js"></script>
        <script src="js/slider.js"></script>
    </body>
</html>
