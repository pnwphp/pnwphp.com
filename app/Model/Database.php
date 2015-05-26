<?php namespace App\Model;

use Illuminate\Support\Collection;

class Database extends Collection
{
	public function __construct(array $data = null)
	{
		parent::__construct(is_null($data) ? include __DIR__ . '/../../database/pnwphp.php' : $data);
	}
}