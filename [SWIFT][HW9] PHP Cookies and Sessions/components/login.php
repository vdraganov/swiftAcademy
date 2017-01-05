<?php
if (!isset($_COOKIE["PHPSESSID"])) {
  session_start();
}

$username = 'master';
$password = '123456';
$error = '';
$_SESSION['isLoggedIn'] = false;
if (!empty($_POST)) {
    echo $username;
    $tempUsername = $_POST['username']; //validation
    $tempPassword = $_POST['password']; //validation

    if ($username === $tempUsername &&
            $password === $tempPassword) {
        $_SESSION['isLoggedIn'] = true;
        // echo $_COOKIE["PHPSESSID"];
        // header('Location: index.php');
        exit;
    }

    if (!$_SESSION['isLoggedIn']) {
        $error = 'Error in credentials';
    }
}
?>


<link rel="stylesheet" href="./css/formStyle.css">

<div id="login-container" class="column-orientation">
    <div id="heading">Login</div>
    <form id="form-login" class="column-orientation" action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" value="" autofocus required/><br/>
        <label for="password">Password:</label>
        <input type="password" name="password" value="" required /><br/>
        <div class="row-orientation">
            <input type="submit " name="btn-login" value="Login"/>
            <input type="button" name="btn-register" value="Register"/>
        </div>
    </form>
</div>
