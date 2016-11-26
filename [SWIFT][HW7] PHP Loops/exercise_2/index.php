
<?php
    $stringHolder = '';
    $startNum = 0;
    $endNum = 1000;


    for ($i=$startNum; $i <= $endNum;) {
        if (!(($i % 3 == 0) || ($i % 7 == 0))) {
            $stringHolder = $stringHolder . $i;
            if (++$i <= $endNum) {
                $stringHolder = $stringHolder . ', ';
            }
        } else {
            $i++;
        }
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
            <span class="proviso">Напишете програма, която разпечатва всички числа от 0 до 1000, който не се делят на 3 и на 7;</span>
        </header>
        <div class="output">
            <?php echo $stringHolder ?>
        </div>
    </body>
</html>
