<?php

$name = $_GET['name'] ?? 'noName';
var_dump($name);
$_GET['name'] = 'aName';
$name = $_GET['name'] ?? 'noName';
var_dump($name);
