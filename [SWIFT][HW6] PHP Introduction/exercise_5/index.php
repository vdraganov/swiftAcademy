<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 5</title>
    </head>
    <body>
        <?php
            $paramsA = [5, 10, 12, 4, 9, 0];
            $paramsB = [-5, 0, 0.2, 20, 9, 0];

            for ($i=0; $i < count($paramsA); $i++) {
                displayVariables($paramsA[$i], $paramsB[$i]);
                comparingNums($paramsA[$i], $paramsB[$i]);
            }

            function comparingNums($a, $b) {
                $gtBoolStr = 'a > b : ';
                $gtBool = boolval($a > $b) ? 'true' : 'false';
                displayResultOfOperation($gtBoolStr, $gtBool);

                $geBoolStr = 'a >= b : ';
                $geBool = boolval($a >= $b) ? 'true' : 'false';
                displayResultOfOperation($geBoolStr, $geBool);

                $ltStr = 'a < b : ';
                $lt = boolval($a < $b) ? 'true' : 'false';
                displayResultOfOperation($ltStr, $lt);

                $leStr = 'a <= b : ';
                $le = boolval($a <= $b) ? 'true' : 'false';
                displayResultOfOperation($leStr, $le);

                $eqStr = 'a == b : ';
                $eq = boolval($a == $b) ? 'true' : 'false';
                displayResultOfOperation($eqStr, $eq);

                $notEqStr = 'a != b : ';
                $notEq = boolval($a != $b) ? 'true' : 'false';
                displayResultOfOperation($notEqStr, $notEq);

                echo '<br><br>';
            }

            function displayVariables($a, $b) {
                echo "a= " . $a . ' b= ' . $b . ';<br>';
            }

            function displayResultOfOperation($operation, $result) {
                echo $operation . $result . ';<br>';
            }
        ?>
    </body>
</html>
