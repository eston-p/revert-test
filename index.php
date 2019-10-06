<?php

require('Class/MyRevert.php');


$class = new MyRevert('Alan Walker');

$class->seperateName();

<<<<<<< HEAD

echo 'Hello, FirstName: ' . $class->getFirstName();
=======
echo 'Hello, FirstName: ' . $class->getFirstName() . ' and Lastname: ' . $class->getLastName();
>>>>>>> parent of 492e73f... Merge pull request #3 from eston-p/change-last-name-from-being-returned
