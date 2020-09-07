<?php

namespace App\Domains\Material\Models;

use Illuminate\Database\Eloquent\Model;

class EngineType extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'engine_type_name',
        'description',
    ];
}
