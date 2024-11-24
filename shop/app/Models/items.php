<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class items extends Model
{
    protected $guarded = [];

    public function brand(): BelongsTo{
        return $this->belongsTo(brands::class); 
    }

    public function category():BelongsTo{
        return $this->belongsTo(categories::class);
    }

}
