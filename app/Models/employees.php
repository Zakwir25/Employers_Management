<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class employees extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'nik',
        'name',
        'email',
        'position_role',
        'division',
    ];
}
