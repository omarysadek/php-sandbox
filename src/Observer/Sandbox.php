<?php
interface Subject
{
	public function attach($observer) : Subject;
	public function dettach($observerId) : Subject;
	public function notify() : Subject;
}
interface Observer
{
	public function handle() : Observer;
	public function id() : int;
}
class User implements Subject
{
	protected $observers = [];
	public function __construct($observer)
	{
		$this->attach($observer);
	}
	public function attach($observer) : Subject
	{
		if ($observer instanceof Observer) {
			$this->observers[$observer->id()] = $observer;
		}
		if (is_array($observer)) {
			array_map(function($observer) {
				$this->attach($observer);
			}, $observer);
		}
		return $this;
	}
	public function dettach($observerId) : Subject
	{
		if (isset($this->observer[$observerId])) {
			unset($this->observer[$observerId]);
		}
	}
	public function notify() : Subject
	{
		array_map(function($observer) {
			$observer->handle();
		}, $this->observers);
		return $this;
	}
	public function logIn() : User
	{
		return $this->notify();
	}
}
class LogObserver implements Observer
{
	protected $id;
	public function __construct($id)
	{
		$this->id = $id;
	}
	public function handle() : Observer
	{
		var_dump('Log into the file event : loggin');
		return $this;
	}
	public function id() : int
	{
		return $this->id;
	}
}
$user = new User([new LogObserver(0)]);
$user->logIn();