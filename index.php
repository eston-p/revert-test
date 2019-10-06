<?php

require('Class/MyRevert.php');


$class = new MyRevert('Alan Walker');

$class->seperateName();

echo 'Hello, FirstName: ' . $class->returnMyFirstandLastName()[0] . ' and Lastname: ' . $class->returnMyFirstandLastName()[1];