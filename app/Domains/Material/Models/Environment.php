<?php

namespace App\Domains\Material\Models;

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'environment_name',
        'groups',
        'description'
    ];
}
