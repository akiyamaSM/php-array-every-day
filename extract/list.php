<?php

$info = [
	'Houssin', 25, 'PHP'
];

// list to exctract array elements into variable

list($name, , $language) = $info;

/* Instead of

	$name = $info[0];
	$language = $info[1];
	
*/
var_dump($name, $language);
