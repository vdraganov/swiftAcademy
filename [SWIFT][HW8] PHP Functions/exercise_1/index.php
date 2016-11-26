
<?php
if (!empty($_POST)) {
    $username = $_POST['username'];

    $stringHolder = 'Hello, ' . $username . '!';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 1</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 1:<br>
            <span class="proviso">Напишете потребителска функция, която приема за параметър име на потребител и при извикване разпечатва: “Hello” + стойността на променливата;</span>
        </header>
        <form class="" action="" method="post">
            <label for="username">Enter Username: </label>
            <input type="text" name="username" value="" placeholder="Username" />

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
            <div class="output">
                <?php echo $stringHolder ?>
            </div>
        <?php endif ?>
    </body>
</html>
