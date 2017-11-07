<?php

class Elevator {
	protected $persons;
	protected $securitySystem;
	public function __construct()
	{
		$this->securitySystem = new SecuritySystem();
	}
	public function openDoor()
	{
		var_dump("Openning the door");
	}
	public function closeDoor()
	{
		$this->securitySystem->check();
		var_dump('cloosing the door');
	}
	public function in(Person $person)
	{
		$this->securitySystem->updateTemperature();
		$this->persons[] = $person;
	}
}
class Person {
}
class SecuritySystem {
	protected $temperature = 60;
	public function updateTemperature()
	{
		$this->temperature += 10;
	}
	public function check()
	{
		if ($this->temperature >= 90) {
			throw new Exception('getting too hot abord abord');
		}
	}

}

$elevator = new Elevator();

$elevator->openDoor();

$elevator->in(new Person('Jean jean'));
$elevator->in(new Person('Jean Umar'));
$elevator->in(new Person('Jean jaque'));

$elevator->closeDoor();