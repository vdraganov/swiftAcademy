<?php
$capitals = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
    "Austria" => "Vienna", "Poland"=>"Warsaw"];

if (!empty($_GET)) {
    $country = $_GET['countrySelect'];

    $capital = $capitals[$country];
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
            Задача 5:<br>
            <span class="proviso">
                Даден е асоциативния масив $capitals:<br>
                <pre>$capitals = [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];</pre>
                Напишете програма, която отпечатва съответната държава, + съответната столица:
            </span>
        </header>
        <form class="" action="" method="get">
            <label for="countrySelect">Pick a country: </label>
            <select name="countrySelect">
                <?php
                    foreach ($capitals as $key => $value) {
                        echo "<option value=\"$key\">$key</option>";
                    }
                ?>
            </select>

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($capital)): ?>
        <div class="output">
            The capital of <?php echo $country . ' is ' . $capital ?>;
        </div>
    <?php endif ?>
    </body>
</html>
