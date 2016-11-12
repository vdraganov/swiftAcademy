<?php
    if (!empty($_GET)) {
        $number = $_GET['number'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Check for Number</title>
    </head>
    <body>
        <form class="" action="" method="get">
            <input type="text" name="number" value=""/>
            <button type="submit" name="submit_btn">Show me the result</button>
        </form>

        <div class="">
            <br>
            <br>
            Result:
            <?php if (isset($number)): ?>
                <?php echo $number; ?>
            <?php endif ?>
        </div>
    </body>
</html>
