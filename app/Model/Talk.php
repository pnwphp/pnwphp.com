<?php namespace App\Model;

use Illuminate\Support\Collection;

/**
 * @property string $code
 * @property string $title
 * @property array[string] $tags
 * @property string $description
 * @property Speaker $speaker
 * @property string $type
 * @property string $room
 * @property \DateTime $time
 * @property int $length
 */
class Talk extends Model {}
