<?php

require 'vendor/autoload.php';

$users = new App\Controllers\UsersController();
$user = new App\Models\User();

echo "<br />";

echo ConcatString('kamal ', 'kafi');

echo "<br />";

$class1 = new Class1();
$class2 = new Class2();