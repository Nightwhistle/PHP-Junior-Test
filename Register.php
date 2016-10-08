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
            require '/init/init.php';

            include 'view/HeaderView.php';

            include 'view/RegisterView.php';

            include 'view/FooterView.php';
            
            
            // Get POST values for register
            $username = isset($_POST['username']) ? $_POST['username'] : null;
            $password = isset($_POST['password']) ? $_POST['password'] : null;
            
            // If nothing is sent, exit script
            if (is_null($username) || is_null($password)) exit();
            
            $user = new User();
            $user->setUsername($username);
            $user->setPassword($password);

            $userController = new UserController($user);
            if ($userController->register($user)) echo "registered!";
            else echo "Something exploded!";
            ?>
        </div>
        <script src="js/jquery.sldr.js"></script>
        <script src="js/slider.js"></script>
    </body>
</html>
