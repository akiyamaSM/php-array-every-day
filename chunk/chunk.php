<?php

$books = [
	'book', 'to', 'read', 1, 2, 'other', 'thing', 5
];

//array_chunk : chunks the array in sub arrays of n element
// if true, the array will conserve the keys

$chuncked = array_chunk($books, 2, true);

var_dump($chuncked);
