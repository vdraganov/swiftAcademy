<?php
require_once './Mobile.php';

$myMobile = new Mobile('One X', 'HTC', 'Valentin', 'Litium', 'Full HD');

echo $myMobile->getInfo();
?>
