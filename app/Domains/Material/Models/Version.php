<?php

namespace App\Domains\Material\Models;

use App\Domains\Material\Models\Traits\Attribute\VersionAttribute;
use App\Domains\Material\Models\Traits\Relationship\VersionRelationship;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use VersionAttribute, VersionRelationship;

    /**
     * @var string[]
     */
    protected $fillable = [
        'version_number',
        'description',
    ];
}
