<?php

abstract class HomeChecker {
	protected $next;
	abstract public function check(HomeStatus $homeStatus);
	public function setNext(HomeChecker $homeChecker) : HomeChecker {
		$this->next = $homeChecker;
		return $this;
	}
	public function next(HomeStatus $homeStatus) {
		if ($this->next) {
			$this->next->check($homeStatus);
		}
	}
}
class Lock extends HomeChecker {
	public function check(HomeStatus $homeStatus) {
		if (!$homeStatus->isLocked()) {
			throw new Exception('Home not Locked, abord!!!!');
		}
		$this->next($homeStatus);
	}
}
class Light extends HomeChecker {
	public function check(HomeStatus $homeStatus) {
		if (!$homeStatus->isLightOff()) {
			throw new Exception('Light is On, abord!!!!');
		}
		$this->next($homeStatus);
	}
}
class Alarm extends HomeChecker {
	public function check(HomeStatus $homeStatus) {
		if (!$homeStatus->isAlarmOff()) {
			throw new Exception('Alarm is off, abord!!!!');
		}
		$this->next($homeStatus);
	}
}
class HomeStatus {
	protected $locked;
	protected $lightOff;
	protected $alarmOff;
	public function __construct(){
		$this->locked = $this->lightOff = $this->alarmOff = true;
	}
	public function isLocked() : bool { return $this->locked; }
	public function isLightOff() : bool { return $this->lightOff; }
	public function isAlarmOff() : bool { return $this->alarmOff; }
	public function switchLight() : HomeStatus { $this->lightOff = !$this->lightOff; return $this; }
	public function switchAlarm() : HomeStatus { $this->alarmOff = !$this->alarmOff; return $this; }
	public function switchLock() : HomeStatus { $this->locked = !$this->locked; return $this; }
}
$homeStatus = new HomeStatus();
// $homeStatus->switchAlarm();
// $homeStatus->switchAlarm();
// $homeStatus->switchLight();
(new Alarm)->setNext((new Light)->setNext(new Lock))->check($homeStatus);