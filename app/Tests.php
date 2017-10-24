<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    protected $table = 'tests';

    protected $fillable = [
        'id',
        'json_data',
        'created_at',
        'updated_at',
    ];
}
