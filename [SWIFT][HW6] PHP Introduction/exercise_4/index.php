<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 4</title>
    </head>
    <body>
        <?php
            $paramsA = [6, 3, 8, -7];
            $paramsB = [-4, 4, -10, -8];
            $paramsC = [1, -10, 4, 14];

            for ($i=0; $i < count($paramsA); $i++) {
                caclulateX($paramsA[$i], $paramsB[$i], $paramsC[$i], $i);
            }

            function caclulateX($a, $b, $c, $newLine) {
                if ($newLine !=0) {
                    echo '<br>';
                }

                $x1 = (-((sqrt(($b*$b) + (4 * $a * $c))) + $b) / 2 * $a);
                $x2 = (((sqrt(($b*$b) + (4 * $a * $c))) - $b) / 2 * $a) . '<br>';
                echo 'Equation: ' . $a . 'x^2 + ' . $b . 'x + '. $c . '= 0' ;
                echo '<br>';
                echo $x1;
                echo '<br>';
                echo $x2;
            }
        ?>
    </body>
</html>
