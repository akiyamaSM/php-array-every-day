<?php

$info = [
	'name' => 'Houssin', 
	'age' => 25,
	'language' => 'PHP'
];

// extract the elements of array into variable wich the name is the key and content is the value

extract($info);

/* Instead of

	$name = $info['name'];
	$language = $info['language'];
	
*/
var_dump($name, $language);
