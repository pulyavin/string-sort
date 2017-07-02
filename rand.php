<?php

$letters = 'а б в г д е ё ж з и й к л м н о п р с т у фх ц ч ш щ ъ ы ь э ю я';
$letters = explode(" ", $letters);

$fopen = fopen('rand.txt', 'w');

for ($k = 0; $k < 1000000; $k++) {
	shuffle($letters);

	$string = "";
	$rand = array_rand($letters, 20);

	foreach ($rand as $key) {
		$string .= $letters[$key];
	}

	fwrite($fopen, $string);
}

fclose($fopen);
