<?php

$value = readline("[Enter a word]:");
function compute($value) {
    $value = strlen($value) * 2;
	return $value;
}

echo compute($value);
?>