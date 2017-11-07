<?php
trait IdTrait {
	protected $id;
	public function id()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
}
class User
{
	use IdTrait;
}
$user = new user();
$user->setId(124);
var_dump($user->id());exit;