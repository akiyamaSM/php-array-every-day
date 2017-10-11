<?php

$books = [
	'PHP',
	'JAVA',
	'C#',
	'C++'
];

print_r(array_flip($books)); 

/*

	[
		'PHP' 	=> 0,
		'JAVA' 	=> 1,
		'c#' 	=> 2,
		'C++' 	=> 3

	]

*/


