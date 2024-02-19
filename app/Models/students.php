<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];

    protected $primaryKey = 'student_id';

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_updated';

    public $timestamps = false;
}
