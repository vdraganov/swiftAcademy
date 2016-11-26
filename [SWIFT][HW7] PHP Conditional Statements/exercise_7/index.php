
<?php
if (!empty($_GET)) {
    $stringHolder = '';
    $numAssociativeArray = [
        'A' => intval($_GET['numberA']),
        'B' => intval($_GET['numberB']),
        'C' => intval($_GET['numberC'])
    ];

    asort($numAssociativeArray);

    foreach ($numAssociativeArray as $key => $val) {
        $stringHolder .= $val . '(' . $key . ') ';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 7</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 7:<br />
            <p class="proviso">
                Сортирайте три числа с вложените if…else конструкции.<br/>
            </p>
        </header>

        <form class="" action="" method="get">
            <label for="card">Enter 3 Numebrs: </label>
            <input type="text" name="numberA" value="" >
            <input type="text" name="numberB" value="" >
            <input type="text" name="numberC" value="" >

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
            <div class="output">
                <strong>Biggest number of the 3 entered numbers is... </strong><em><?php echo $stringHolder ?><em>
            </div>
        <?php endif ?>
    </body>
</html>
