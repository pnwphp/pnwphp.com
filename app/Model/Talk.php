<?php namespace App\Model;

use Illuminate\Support\Collection;

/**
 * @property string $code
 * @property string $title
 * @property array[string] $tags
 * @property string $abstract
 * @property Speaker $speaker
 * @property string $type
 * @property string $room
 * @property \DateTime $time
 * @property int $length
 */
class Talk extends Model
{
	public function __get($key)
	{
		$data = parent::__get($key);
		if ($key === 'room') {
			$data = new Collection($this->database->rooms->get($data));
		}
		
		return $data;
	}
}
