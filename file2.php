<?php
$file = file_get_contents('rand.txt');

/**************/
	$start = microtime(true);
/**************/


$array = preg_split('//u', $file, -1, PREG_SPLIT_NO_EMPTY);

sort($array);

$string = implode ("", $array);



/**************/
    $end = microtime(true);
/**************/

$time = number_format(($end - $start), 2);
echo 'This page loaded in ', $time, ' seconds';