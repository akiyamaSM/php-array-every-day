<?php

$books = [
	'book', 'to', 'read'
];

// array_walk execute code in each of the elements(doesnt affect the initial array)

array_walk($books, function($book) {
	echo "I love {$book} <br>";
});

