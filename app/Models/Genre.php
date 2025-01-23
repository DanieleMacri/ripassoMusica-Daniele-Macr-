<?php

namespace App\Models;

use App\Models\Album;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    protected $fillable = ['name'];

    public function albums(): BelongsToMany
    {
        return $this->belongsToMany(Album::class);
    }
}
