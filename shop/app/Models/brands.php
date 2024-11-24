<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class brands extends Model
{
    //
    protected $guarded = [];

    public function item():HasMany
    {
        return $this->hasMany(items::class);
    }
}


