<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 * 
 * @property int $prs_id
 * @property string|null $prs_firstName
 * @property string|null $prs_surname
 * @property string|null $prs_mobno
 * @property string|null $prs_position
 * @property bool|null $prs_isActive
 *
 * @package App\Models
 */
class Person extends Model
{
	protected $table = 'person';
	protected $primaryKey = 'prs_id';
	public $timestamps = false;

	protected $casts = [
		'prs_isActive' => 'bool'
	];

	protected $fillable = [
		'prs_firstName',
		'prs_surname',
		'prs_mobno',
		'prs_position',
		'prs_isActive'
	];
}
