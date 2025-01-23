<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Album extends Model
{
    protected $fillable = ['name', 'description', 'img', 'user_id'];
    
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
}
