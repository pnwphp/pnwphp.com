<?php namespace App\Model;

use Illuminate\Support\Collection;

class Conference extends Model
{
	public function __construct(Database $database = null)
	{
		if (!$database) {
			$database = new Database();
		}
		
		parent::__construct($database->get('conference'), $database); 
	}
	
	public function __get($key)
	{
		static $collections = ['speakers', 'sponsors', 'communitySponsors', 'talks', 'rooms'];
		if (in_array($key, $collections, true)) {
			$data = $this->database->get($key);
			foreach ($data as &$item) {
				$item = new Model($item, $this->database);
			}
			return new Collection($data);
		}

		return parent::__get($key);
	}
}
