<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 10 Nov 2018 04:28:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Walk
 * 
 * @property int $id
 * @property int $dog_id
 * @property \Carbon\Carbon $dt_list
 * @property \Carbon\Carbon $dt_w_start
 * @property int $dt_w_duration
 * @property \Carbon\Carbon $dt_a_start
 * @property \Carbon\Carbon $dt_a_finish
 * @property float $price_start
 * @property int $last_bet_id
 * @property string $adress
 * 
 * @property \App\Models\Dog $dog
 *
 * @package App\Models
 */
class Walk extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'dog_id' => 'int',
		'dt_w_duration' => 'int',
		'price_start' => 'float',
		'last_bet_id' => 'int'
	];

	protected $dates = [
		'dt_list',
		'dt_w_start',
		'dt_a_start',
		'dt_a_finish'
	];

	protected $fillable = [
		'dog_id',
		'dt_list',
		'dt_w_start',
		'dt_w_duration',
		'dt_a_start',
		'dt_a_finish',
		'price_start',
		'last_bet_id',
		'adress'
	];

	public function dog()
	{
		return $this->belongsTo(\App\Models\Dog::class);
	}
}
