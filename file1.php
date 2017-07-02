<?php
$file = file_get_contents('rand.txt');

/**************/
	$start = microtime(true);
/**************/



$sort = [];
$string = "";

$array = preg_split('//u', $file, -1, PREG_SPLIT_NO_EMPTY);

foreach ($array as $symbol) {
	if (!isset($sort[$symbol])) {
		$sort[$symbol] = 0;
	}
	
	$sort[$symbol]++;
}

ksort($sort);

foreach ($sort as $key => $value) {
	for ($i = 0; $i < $value; $i++) {
		$string .= $key;
	}
}



/**************/
    $end = microtime(true);
/**************/

$time = number_format(($end - $start), 2);
echo 'This page loaded in ', $time, ' seconds';