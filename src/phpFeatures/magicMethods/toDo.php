<?php

class User {

	protected $login;
	protected $password;
	protected $age;

	public function __construct() {
		echo 'This contructor is too lazy to setup your attributes, so do it by your self!\n';
	}

	public function __set($attribute, $value) {
		switch($attribute) {
			case 'login':
				$this->login = $value;
				break;
			case 'passwod':
				$this->passord = crypt($value);
				break;
			case 'age':
				$this->age = $value;
				break;
		}

		return $this;
	}

	public function __get($attribute) {
		var_dump(property_exits($this, $attribute));exit;
		// if(property_exits($this, $attribute))
	}
}

$user = new User;

$user->login = 'kinovy';