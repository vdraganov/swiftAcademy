<?php
require './Vehicles.php';

$myVehicle = new Vehicle('Car', 'Gasoline', '1.4', 'Ford', 2002);

echo $myVehicle->getSpecs();

?>
