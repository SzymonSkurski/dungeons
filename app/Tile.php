<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tile extends Model
{
    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function fields() : HasMany
    {
        return $this->hasMany(Field::class);
    }
}
