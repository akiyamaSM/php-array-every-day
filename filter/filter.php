<?php

$books = [
	'book', 'to', 'read', 1, 2, 'other', 'thing', 5
];

//array_filter filter an array and conserve the elements that satisfie the condition
// if u only put the entry it will filter u only elements with value !=(false, null, '') and true ==> 1

$numbers = array_filter($books, function ($element){
	return is_numeric($element);
});

print_r($numbers);

$entry = [
             0 => 'foo',
             1 => false,
             2 => -1,
             3 => null,
             4 => true,
             5 => ''
		];

print_r(array_filter($entry));