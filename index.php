<?php
echo "<h1>Welcome to Composer</h1>";

require 'vendor/autoload.php';

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

$myArray = array('person' => array('first_name' => 'kamal', 'second_name' => 'kafi'));
// $first_name = $myArray['person']['first_name']; // Old way of geting first name

$first_name = Arr::get($myArray, 'person.first_name');
$title = 'this is a nice title';

echo $first_name;

echo '<br/>';

echo Str::title($title);
