<?php
if (!empty($_POST)) {
    $n = $_POST['number'];

    $result = strrev($n);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 4</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 4:<br>
            <span class="proviso">Напишете функция, която приема за параметър цяло число и връща числото обърнато на обратно (пр. 123 => 321):</span>
        </header>
        <form class="" action="" method="post">
            <label for="number">Number: </label>
            <input type="number" name="number" value="" required />

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($result)): ?>
            <div class="output">
                <?php echo $result; ?>
            </div>
        <?php endif ?>
    </body>
</html>
