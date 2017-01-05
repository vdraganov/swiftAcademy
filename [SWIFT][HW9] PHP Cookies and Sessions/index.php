<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Article Component</title>
        <script data-require="jquery@3.0.0" data-semver="3.0.0" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
        <link rel="stylesheet" href="./css/color-palette.css" media="screen" title="no title">
        <link rel="stylesheet" href="./css/main.css" media="screen" title="no title">
        <!-- <script type="text/javascript" src="./js/main.js" defer></script> -->
    </head>
    <body>
        <header>
            <ul>
                <li>Home</li>
                <li>News</li>
                <li>Contacts</li>
            </ul>
            <ul>
                <li>About</li>

                    <?php
                        if (!isset($_SESSION['isLoggedIn'])) {
                            echo '<li id="logout"><a href="./assets/sessionClearer.php">Logout</a></li>';
                        }
                        else {
                            echo '<li>' . $username . '</li>';
                        }
                    ?>
            </ul>
        </header>
        <main>
            <div id="main-background"></div>
            <div id="main-container" class=".column-orientation">
                <?php
                    // session_start();

                if (isset($_SESSION['isLoggedIn'])) {
                    if (!$_SESSION['isLoggedIn']) {
                        include "./components/login.php";
                    // header('Location: components/login.php');
                        exit;
                    }
                }

                    echo 'You are in a secret area!!!';
                ?>
            </div>
        </main>
        <script type="text/javascript" src="./js/main.js" defer></script>
    </body>
</html>
