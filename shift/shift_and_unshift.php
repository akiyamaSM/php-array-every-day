<?php

$stack = array("orange", "banana", "apple", "raspberry");
// array_shift will remove the first element of an array and return it

$fruit = array_shift($stack);
print_r($stack);


// array_unshift will add elements to the begining of the array
// Retourne le nouveau nombre d'éléments du tableau array. 
$queue = array("orange", "banana");
$count = array_unshift($queue, "apple", "raspberry");
print_r($queue);
?>

