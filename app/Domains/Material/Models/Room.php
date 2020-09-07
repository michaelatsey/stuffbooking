<?php

namespace App\Domains\Material\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * @var string[]
     */
    protected $fillable =[
        'room_name',
        'sitemap',
        'description',
        'site_id'
    ];
}
