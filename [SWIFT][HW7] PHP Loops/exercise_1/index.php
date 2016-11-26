
<?php
    $stringHolder = '';
    $startNum = 100;
    $endNum = 999;


    for ($i=$startNum; $i <= $endNum;) {
        $stringHolder = $stringHolder . $i;
        if (++$i <= $endNum) {
            $stringHolder = $stringHolder . ', ';
        }
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
            <span class="proviso">Напишете програма, която разпечатва всички числа от 100 до 999 едно до друго разделени със запетая (,). Съобразете, че след последното число не трябва да има запетая;</span>
        </header>
        <div class="output">
            <?php echo $stringHolder ?>
        </div>
    </body>
</html>
