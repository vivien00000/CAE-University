<?php

namespace App\Models;

<<<<<<< HEAD
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

    /**
 * Class Faculty
 *
 * @property int $faculty_id
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $birthdate
 * @property string $gender
 * @property string $mobile_number
 * @property string $email_address
 * @property Carbon $date_entered
 * @property string $position
 * @property string $department
 *
 * @package App\Models
 */
    class Faculty extends Model
{
	protected $table = 'faculty';
	protected $primaryKey = 'faculty_id';
	public $timestamps = false;

	protected $casts = [
		'birthdate' => 'datetime',
		'date_entered' => 'datetime'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'birthdate',
		'gender',
		'mobile_number',
		'email_address',
		'date_entered',
		'position',
		'department'
	];
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    use HasFactory;
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
}
