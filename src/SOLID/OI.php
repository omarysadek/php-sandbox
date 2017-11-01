<?php
// I don't force child class to implements something they don't need
// O trick if you have to do if instanceof on a variable typed from an interface that means big problablity you breaking o principale
interface WorkableInterface
{
	public function work();
}
interface SleepableInterface
{
	public function sleep();
}
interface ManagerInterface
{
	public function manage();
}
class Human implements WorkableInterface, SleepableInterface, ManagerInterface
{
	public function work()
	{
		var_dump("Working");
	}
	public function sleep()
	{
		var_dump("sleeping");
	}
	public function manage()
	{
		$this->work();
		$this->sleep();
	}
}
class Android implements WorkableInterface, ManagerInterface
{
	public function work()
	{
		var_dump('Working faster');
	}
	public function manage()
	{
		$this->work();
	}
}
class Bigboss
{
	public function hire(ManagerInterface $worker)
	{
		$worker->manage();
	}
}
(new Bigboss())->hire(new Human());
(new Bigboss())->hire(new Android());
