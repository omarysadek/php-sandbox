<?php

abstract class Learning {
	const BASE = 3;
	const TAX = 1 ;
	const TOTAL = self::BASE + self::TAX;

	public function getAnyArg(string $object, ...$args) {
		var_dump($object);
		var_dump($args[1]);
		var_dump($args[0]);
	}

	public function getAnyArgOld() {
		$args = func_get_args();
		var_dump(array_shift($args));
		var_dump(array_shift($args));
		var_dump(array_shift($args));
	}
}

// $test = new Learning();

// var_dump($test::TOTAL);exit;

// var_dump(Learning::TOTAL);exit;


Learning::getAnyArg('test', 'first', 'second');
Learning::getAnyArg(...['object', 1, 2]);
Learning::getAnyArgOld('test', 'first', 'second');

