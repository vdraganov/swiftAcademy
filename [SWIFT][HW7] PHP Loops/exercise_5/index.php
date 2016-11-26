
<?php
if (!empty($_POST)) {
        $n = $_POST['nNumber'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 5</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 5:<br>
            <span class="proviso">Напишете програма, която по дадено целочислено число, да разпечатва матрицата:</span>
        </header>
        <form class="" action="" method="post">
            <label for="nNumber">n: </label>
            <input type="number" name="nNumber" value="">

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($n)): ?>
            <?php echo '<div class="output">' ?>
                <?php echo '<strong>' ?>
                    <?php
                        for ($i=1; $i <= $n; $i++) {
                            for ($j= $i; $j < $n + $i; $j++) {
                                echo $j ;
                            }
                            echo '<br>';
                        }
                    ?>
                <?php echo '</strong>' ?>
            <?php echo '</div>' ?>
        <?php endif ?>
    </body>
</html>
