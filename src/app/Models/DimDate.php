<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimDate extends Model
{
    protected $table = 'dim_dates';

    protected $fillable = [
        'date',
        'day_name',
        'month',
        'year',
    ];
}
