<?php
// array_search : look for the first key having the value entered
// if u want to get all keys use array_keys()

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;


// if the value not specified it will return all the keys
$keys = array_keys($array, 'red'); // [ 0 => 1, 1 => 3]
