
<?php
if (!empty($_POST)) {
    $card = $_POST['card'];
    $deckArray = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');

    if (in_array($card, $deckArray)) {
        $stringHolder = 'Yes';
    } else {
        $stringHolder = 'No';
    }
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
            <p id="header" class="proviso">
                Задача 3:<br />
                Класическото тесте за игра на карти съдържа: 2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A.<br/>
                Напишете програма, която по подаден стринг да отпечатва дали е карта от тестето за игра или не e:
            </p>
        </header>

        <form class="" action="" method="post">
            <label for="card">Playing Card: </label>
            <input type="text" name="card" value="" placeholder="Enter a playing card">

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
            <div class="output">
                <strong>Valid card sign?</strong> <em><?php echo $stringHolder ?><em>
            </div>
        <?php endif ?>
    </body>
</html>
