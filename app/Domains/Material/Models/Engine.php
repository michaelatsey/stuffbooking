<?php

namespace App\Domains\Material\Models;

use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'engines';

    /**
     * @var string[]
     */
    protected $fillable = [
        'engine_name',
        'mac_address',
        'uninstall_at',
        'is_scanner',
        'is_tablet',
        'owner',
        'owner_password',
        'description',
        'engine_type_id',
        'room_id',
        'version_id',
        'environment_id',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'uninstall_at',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'is_scanner' => 'boolean',
        'is_tablet' => 'boolean',
    ];
}
