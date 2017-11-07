<?php
class User {

	protected $name;
	protected $age;

	public function __construct(string $name, int $age) {
		$this->name = $name;
		$this->age  = $age;
	}

	public function name() : string {
		return $this->name;
	}

	public function age() : int {
		return $this->age;
	}

	public function isBigboy() : bool {
		return ($this->age > 17) ? 'Yes' : 'No';
	}

}
class UserCollection {

	protected $users;

	public function __construct(...$user) {
		$this->add($user);
	}

	public function add($user) : UserCollection {
		if (is_array($user)) {
			array_map([$this, 'add'], $user);
		}
		if ($user instanceof User) {
			$this->users[] = $user;
		}
		return $this;
	}

	public function print() : UserCollection {
		var_dump(
			array_map(function($user) {
				return [$user->name() => $user->age()];
			}, $this->users)
		);
		return $this;
	}

	public function sortBy($attribute) : UserCollection {
		usort($this->users, function($preUser, $postUser) use ($attribute) {
			return $preUser->$attribute() <=> $postUser->$attribute();
		});
		return $this;
	}

}

$collections = new UserCollection(
	$p1 = new User('Omar', 26),
	new User('Jafar', 11),
	new User('Maisan', 8),
	new User('Yahia', 50)
);

$collections->sortBy('name')->print()->sortBy('age')->print();

var_dump($p1->isBigboy());exit;
/*
$tasks = ['small', 'hey bro', 'big boyyy'];

// asort($tasks);
// rsort($tasks);
usort($tasks, function($a, $b) {
	return strlen($a) <=> strlen($b);
});
var_dump($tasks);exit;

*/