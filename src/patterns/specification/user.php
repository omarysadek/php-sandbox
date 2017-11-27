<?php
class User {
	protected $name;
	protected $type;
	public function __construct(string $name, string $type) {
		$this->name = $name;
		$this->type = $type;
	}
	public function type() : string {
		return $this->type;
	}
}
interface specification {
	public function isSatisfayBy(User $user) : bool;
}
class GodUser implements Specification {
	public function isSatisfayBy(User $user) : bool {
		return ($user->type() == 'god') ? true : false;
	}
}
class HumanUser implements Specification {
	public function isSatisfayBy(User $user) : bool {
		return ($user->type() == 'human') ? true : false;
	}
}
class UserRepository {
	protected $users;
	public function __construct(array $users) {
		$this->users = $users;
	}
	public function getBy(Specification $specification) {
		return array_filter($this->users, function ($user) use ($specification) {
			if ($specification->isSatisfayBy($user)) {
				return $user;
			}
		});
	}
}

$users = new UserRepository([
	new User('notYou', 'god'),
	new User('you', 'human'),
	new User('random', 'human')
]);

var_dump($users->getBy(new GodUser));
var_dump($users->getBy(new HumanUser));