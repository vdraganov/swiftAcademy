<?php
    $tempValues = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    asort($tempValues);

    function calcMedianTemp($arr){
        $result = 0;

        for ($i=0; $i < count($arr); $i++) {
            $result += $arr[$i];
        }

        return $result/count($arr);
    }

    $minOutputStr = join(array_slice($tempValues, 0, 4), " ,");
    $maxOutputStr = join(array_slice($tempValues,count($tempValues) - 5), " ,");
    $medianTemp = calcMedianTemp($tempValues);
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
            <span class="proviso">
                Дадени са температурните стойности: 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73;<br>
                <ol>
                    Напишете програма, която извежда следното:
                    <li>5-те най-високи стойности;</li>
                    <li>5-те най-ниски стойности;</li>
                    <li>Средна стойност за периода;</li>
                </ol>
            </span>
        </header>
        <div class="output">
            The 5 maximal tempratures for the period were: <?php echo $maxOutputStr ?>;<br>
            The 5 minimal tempratures for the period were: <?php echo $minOutputStr ?>;<br>
            The average temprature for the period were: <?php echo $medianTemp ?>;
        </div>
    </body>
</html>
