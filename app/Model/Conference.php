<?php namespace App\Model;

use Illuminate\Support\Collection;
use DateTime;

/**
 * @property Collection[Speaker] $speakers
 * @property Collection[Sponsor] $sponsors
 * @property Collection[CommunitySponsor] $communitySponsors
 * @property Collection[Talk] $talks
 * @property Collection[Room] $rooms
 * @property string $title
 * @property string $abbr
 * @property DateTime $startDate
 * @property DateTime $endDate
 */
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
			$class = __NAMESPACE__ . '\\' . ucfirst(str_singular($key));
			$data = $this->database->get($key);
			foreach ($data as &$item) {
				$item = new $class($item, $this->database);
			}
			return new Collection($data);
		}

		return parent::__get($key);
	}
}
