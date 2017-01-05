<?php

require_once '../exercise_2/Human.php';

$person1 = new Human ('Mike', 'male', '82kg.', '182', new Dog('Akita', 'beige', 'medium', 'brown'));
$person2 = new Human ('Jane', 'female', '54kg.', '167', new Dog('Pug', 'yellowish', 'short', 'blue'));
$person3 = new Human ('Luke', 'male', '102kg.', '192', new Dog('German Shepard', 'beige with black', 'long', 'brown'));


echo $person2->meetOthers($person3);
echo $person1->meetOthers($person2);
echo $person1->meetOthers($person3);

echo $person2->endMeeting($person3);

echo $person1->meetOthers($person2);
echo $person3->meetOthers($person2);

?>
