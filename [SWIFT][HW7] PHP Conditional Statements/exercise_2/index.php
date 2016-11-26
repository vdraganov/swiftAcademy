
<?php
if (!empty($_POST)) {
    $score = $_POST['score'];

    function modifyScore($score)
    {
        switch ($score) {
            case (($score > 0) && ($score <= 3)):
                $modifiedScore = $score * 10 ;
                break;
            case (($score >= 4) && ($score <= 6)):
                $modifiedScore = $score * 15 ;
                break;
            case (($score >= 7) && ($score <= 9)):
                $modifiedScore = $score * 20 ;
                break;
            case ($score >= 10):
                $modifiedScore = $score * 100 ;
                break;

            default:
                return "The Score you've entered seems invalid.";
                break;
        }


        return 'The modified score is: '. $modifiedScore;
    }

    $stringHolder = modifyScore($score);
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
            Задача 2:<br />
            <span class="proviso">Напишете програма, която добавя допълнителен брой точки, към даден резултат</span>
        </header>

        <form class="" action="" method="post">
            <label for="score">a: </label>
            <input type="number" name="score" value="" placeholder="Enter the score">

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
            <div class="output">
                <?php echo $stringHolder ?>
            </div>
        <?php endif ?>
    </body>
</html>
