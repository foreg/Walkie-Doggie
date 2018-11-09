<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 09 Nov 2018 22:50:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Dog
 * 
 * @property int $id
 * @property string $name
 * @property string $age
 * @property bool $sex
 * @property string $breed
 * @property string $size
 * @property string $info
 * @property int $user_id
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Dog extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'sex' => 'bool',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'age',
		'sex',
		'breed',
		'size',
		'info',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
