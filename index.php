<?php

require('Class/MyRevert.php');


$class = new MyRevert('Alan Walker');

$class->seperateName();

echo 'Hello, FirstName: ' . $class->getFirstName() . ' and Lastname: ' . $class->getLastName();
