<?php

require 'Database.php';
require 'User.php';

$user = new User();
$user->create(['username' => 'Mark']);