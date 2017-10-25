<?php

class User {

	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function name() {
		return $this->name;
	}
}

class UserCollections {

	protected $users;

	public function add($user) {

		if (is_array($user)) {
			array_map([$this, 'add'], $user);
		}

		if ($user instanceof USER) {
			$this->users[] = $user;
		}

		return $this;
	}

	public function names() {
		return array_map(function($user){
			return $user->name();
		}, $this->users);
	}
}


$users = (new UserCollections)->add([new User('Packo'), new User('Tristant')])->names();

var_dump($users);exit;
