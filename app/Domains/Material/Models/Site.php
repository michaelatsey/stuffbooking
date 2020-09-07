<?php

namespace App\Domains\Material\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    /**
     * @var string[]
     */
    protected $fillable =[
        'site_name',
        'manager',
        'description',
    ];
}
