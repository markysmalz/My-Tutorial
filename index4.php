<?php

require 'TalkInterface.php';
require 'Dog.php';
require 'Cat.php';

$cat = new Cat();
$dog = new dog();

echo $cat->talk() . '<br>' . $dog->talk();