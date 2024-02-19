<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];
<<<<<<< HEAD

    protected $primaryKey = 'student_id';

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_updated';

    public $timestamps = false;
=======
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
}
