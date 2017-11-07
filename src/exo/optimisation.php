<?php

	$a = [
		'123' => '0',
		'321' => '0',
		'564' => '0',
		'111' => '0',
	];

	$b = [
		'564' => '0',
		'865' => '0',
		'111' => '0',
		'987' => '0',
	];

	$c = [];
	foreach($a as $aK => $aV) {
		if (isset($b[$aK])) {
			unset($a[$aK]);
			unset($b[$aK]);
			$c[$aK] = $aV;
			continue;
		}
	}


	var_dump($a);
	var_dump($b);
	var_dump($c);
