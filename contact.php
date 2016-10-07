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
        <link rel="stylesheet" type="text/css" href="css/news.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    </head>
    <body>
        <div id="site-container">
            <?php
            // Loading init.php file that initializes every class and configuration
            require '/init/init.php';

            include 'view/HeaderView.php';

            echo "<iframe width='800px' height='500px' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?q=NoviSad&amp;ie=UTF8&amp;&amp;output=embed'></iframe><br />";
            include 'view/FooterView.php';
            ?>
        </div>
        <script src="js/jquery.sldr.js"></script>
        <script src="js/slider.js"></script>
    </body>
</html>
