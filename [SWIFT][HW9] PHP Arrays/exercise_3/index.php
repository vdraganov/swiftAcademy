<?php
$x = [1,2,3,4,5,6,7,8,9,10];

if (!empty($_GET)) {
    $index = $_GET['pos'];
    $arrayElement = $_GET['arrayElement'];

    if ($index > count($x)) {
        $index = count($x);
    }

    array_splice($x, $index, 0, $arrayElement);

    $result = join($x, ', ');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 3</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 3:<br>
            <span class="proviso">
                Напишете програма, която добавя елемент в масив по подаден индекс на масива и съответната стойност. Ако текущия масив е с по-къса дължина от подадения индекс, поставете елемента последен.
            </span>
        </header>
        <form class="" action="" method="get">
            <label for="pos">Put in position: </label>
            <input type="number" name="pos" value="" required min="0"/>
            <label for="arrayElement">Put in position: </label>
            <input type="text" name="arrayElement" value="" required />

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($result)): ?>
        <div class="output">
            The new element is putted at position <?php echo $index ?><br>
            The new Array: <?php echo '$x = [' . $result . ']'; ?>
            </ul>
        </div>
    <?php endif ?>
    </body>
</html>
