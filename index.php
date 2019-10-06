<?php

require('Class/MyRevert.php');


$class = new MyRevert('Alan Walker');

$class->seperateName();

<<<<<<< HEAD
echo 'Hello, FirstName: ' . $class->getFirstName();
=======
echo 'Hello, FirstName: ' . $class->returnMyFirstandLastName()[0] . ' and Lastname: ' . $class->returnMyFirstandLastName()[1];
>>>>>>> parent of dfac6e6... Merge pull request #2 from eston-p/simplify-separation-of-name
