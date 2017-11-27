<?php
//Return all time same type, should be replace by any other parents
interface ProviderInterface
{
	public function getAll() : array;
}
class Mysql implements ProviderInterface
{
	public function getAll() : array
	{
		return [
			'Kinovy',
			'eNix',
			'Toto'
		];
	}
}
class File implements ProviderInterface
{
	public function getAll() : array
	{
		$data = 'Jean Pierre, Jean charle, Jean mescouilles';

		return explode(',', $data);
	}
}
class TxtFile extends File
{
	protected $filePathExtIsNotTxT = true;
	public function getAll() : array
	{
		if ($this->filePathExtIsNotTxT) {
			throw new exception('wow this violate l pronciple you cunt!!!!');
		}
	}
}
class User
{
	protected $provider;
	public function __construct(ProviderInterface $provider)
	{
		$this->provider = $provider;
	}
	public function all()
	{
		return $this->provider->getAll();
	}
}
var_dump((new User(new Mysql))->all());
var_dump((new User(new File))->all());
var_dump((new User(new txtFile))->all());