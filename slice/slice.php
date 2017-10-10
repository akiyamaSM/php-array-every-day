<?php

$numbers = [
	1, 2, 3, 4, 5, 6, 7
];

// array_slice() returns the sequence of elements from the array array as specified by the offset and length parameters. 
// If offset is negative, the sequence will start that far from the end of the array. 
$output = array_slice($numbers, 2);	// [3, 4, 5, 6, 7]


// array_splice — Remove a portion of the array and replace it with something else
$removed = array_splice($numbers, 2);	// removed = [3, 4, 5, 6, 7] && numbers = [1, 2]

