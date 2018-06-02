<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	'name', 'province_id'
    ];

    protected $table = 'cities';
}