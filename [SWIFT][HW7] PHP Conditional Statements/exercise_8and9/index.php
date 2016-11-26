
<?php
if (!empty($_GET)) {
    $num = $_GET['numberA'];

    $stringHolder = '';

    function getWordRepresentation($num) {
        switch ($num) {
            case '0':
                return 'zero';
                break;
            case '1':
                return 'one';
                break;
            case '2':
                return 'two';
                break;
            case '3':
                return 'three';
                break;
            case '4':
                return 'four';
                break;
            case '5':
                return 'five';
                break;
            case '6':
                return 'six';
                break;
            case '7':
                return 'seven';
                break;
            case '8':
                return 'eight';
                break;
            case '9':
                return 'nine';
                break;
            case '10':
                return 'ten';
                break;
            case '11':
                return 'eleven';
                break;
            case '12':
                return 'twelve';
                break;
            case '13':
                return 'thirteen';
                break;
            case '14':
                return 'fourteen';
                break;
            case '15':
                return 'fivteen';
                break;
            default:
                // var_dump($num);
                break;
        }
    }

    function getWordRepresentationOfTenths($num) {
        switch ($num) {
            case '2':
                return 'twenty';
                break;
            case '3':
                return 'thirty';
                break;
            case '4':
                return 'fourty';
                break;
            case '5':
                return 'fifty';
                break;
            case '6':
                return 'sixty';
                break;
            case '7':
                return 'seventy';
                break;
            case '8':
                return 'eighty';
                break;
            case '9':
                return 'ninety';
                break;
            default:
                // var_dump($num);
                break;
        }
    }

    function splitNumber($num) {

        function getIntegerValue($numAsDecimal) {
            $num = $numAsDecimal;
            if ($numAsDecimal > 1) {
                return intval($numAsDecimal);
            }
        }

        function alterNumber($num) {
            echo ($num - intval($num)) * 10 . '<br>';
            return ($num - intval($num)) * 10;
        }

        class numObj {
            function numObj() {
                $this->hundreds = null;
                $this->tenths = null;
                $this->units = null;
            }
        };

        $numObj = new numObj();

        getWordRepresentation($num);

        $num = $num / 100;

        $numObj->hundreds = getIntegerValue($num);
        $num = alterNumber($num);
        $numObj->tenths = getIntegerValue($num);
        $num = alterNumber($num);
        $numObj->units = getIntegerValue($num);

        return $numObj;
    }

    $numObj = splitNumber($num);

    if (($num >=0) && ($num < 16)) {
        $stringHolder = getWordRepresentation($num);
    } else if (($num >= 16) && ($num < 20)) {
        $stringHolder .= getWordRepresentation($numObj->units) . 'teen';
    } else if (($num >= 20) && ($num < 100)) {
        $stringHolder = getWordRepresentationOfTenths($numObj->tenths);
        $stringHolder .= ' ' . getWordRepresentation($numObj->units);
    } else {
        $stringHolder = getWordRepresentation($numObj->hundreds) . ' hundred ' ;
        echo $numObj->tenths . $numObj->units;
        $stringHolder .= getWordRepresentationOfTenths($numObj->tenths);
        $stringHolder .= ' ' . getWordRepresentation($numObj->units);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 8 & 9</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 8:<br />
            <p class="proviso">
            Напишете програма, която приема променлива от тип Число (в размера 0, 9) – и разпечатва тяхната стойност от тип стринг:<br/>
            Напишете програма, която приема число в диапазона 0 … 999 и го разпечатва с думи:<br/>
            </p>
        </header>

        <form class="" action="" method="get">
            <label for="numberA">Enter number in range 0-9: </label>
            <input type="number" name="numberA" value="" min="0" max="999">

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
            <div class="output">
                <strong>The number is... </strong><em><?php echo $stringHolder ?><em>
            </div>
        <?php endif ?>
    </body>
</html>
