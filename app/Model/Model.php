<?php namespace App\Model;

use Illuminate\Support\Collection;

class Model extends Collection
{
	protected $database;

	public function __construct(array $data, Database $database)
	{
		$this->database = $database;
		parent::__construct($data);
	}

	public function __get($key)
	{
		if (!$this->has($key)) {
			throw new \UnexpectedValueException(
				'A ' . get_class() . ' has no "' . $key . '" property.'
			);
		}

		return $this->get($key);
	}
}
