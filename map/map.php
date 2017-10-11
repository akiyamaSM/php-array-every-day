<?php

$books = [
	'book', 'to', 'read'
];
$books2 = [
	'book2', 'to2', 'read2'
];

// array_map : construct a new array as result

$iread = array_map(function($book1, $book2){
	return "I read {$book1} & {$book2}";
}, $books, $books2);

print_r($iread);