<?php
$x = [1,2,3,4,5,6,7,8,9,10];

if (!empty($_GET)) {
    $index = $_GET['pos'];

    unset($x[$index]);

    $result = join($x, ', ');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 2</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 2:<br>
            <span class="proviso">Даден е масива $x = [1,2,3,4,5,6,7,8,9,10];<br>
                Напишете програма, която изтрива елемент от масива, спрямо подаден индекс на елемента (използвайте потребителска функция с параметър).
            </span>
        </header>
        <form class="" action="" method="get">
            <label for="pos">Remove from position: </label>
            <input type="number" name="pos" value="" required min="0" max="<?php echo count($x) ?>"/>

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($result)): ?>
        <div class="output">
            The element from position <?php echo $index ?> is removed<br>
            The new Array: <?php echo '$x = [' . $result . ']'; ?>
            </ul>
        </div>
    <?php endif ?>
    </body>
</html>
