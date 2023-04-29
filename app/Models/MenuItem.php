<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuItem extends Model
{

    /**
     * RELATIONS
     */

    /**
     * get children with nested children function
     *
     * @return HasMany
     */
    public function children():HasMany
    {
        return $this->hasMany(
            MenuItem::class,
            'parent_id',
            'id'
        )->with('children');
    }
}
