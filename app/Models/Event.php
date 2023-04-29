<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    /**
     * RELATIONS
     */

    /**
     * get all workshops of an event function
     *
     * @return HasMany
     */
    public function workshops():HasMany
    {
        return $this
            ->hasMany(
                Workshop::class,
                'event_id',
                'id'
            );
    }
}
