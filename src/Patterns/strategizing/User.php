<?php
interface registrationInterface {
	public function handle($name) : User;
}
class user {
	protected $name;
	protected $type;
	public function __construct(string $name, string $type) {
		$this->name = $name;
		$this->type = $type;
	}
	public function info() : string {
		return $this->name . ' is ' . $this->type;
	}
}
class VipRegistration implements registrationInterface {
	public function handle($name) : User {
		return new User($name, 'VIP');
	}
}
class DefaultRegistration implements registrationInterface {
	public function handle($name) : User {
		return new User($name, 'clochar');
	}
}
Class AdminRegistration implements RegistrationInterface {
	public function handle($name) : User {
		return new User($name, 'GOD');
	}
}
abstract class RegistrationFactory {
	public function get($type = null) : RegistrationInterface {
		if ($type == 'god') {
			return new AdminRegistration();
		}
		if ($type == 'vip') {
			return new VipRegistration();
		}

		return new DefaultRegistration();
	}
}
echo RegistrationFactory::get('god')->handle('Kinovy')->info();
echo RegistrationFactory::get('vip')->handle('Keynge')->info();
echo RegistrationFactory::get()->handle('You')->info();