<?php

namespace App\Domains\Material\Models\Traits\Relationship;

use App\Domains\Material\Models\Engine;

/**
 * Class VersionRelationship.
 */
trait VersionRelationship
{
    /**
     * @return mixed
     */
    public function engines()
    {
        return $this->hasMany(Engine::class, 'engine_id')->with('children');
    }
}
