<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Assignee extends Model
{
    use HasFactory;

    public function assignments() : HasMany
    {
        return $this->hasMany(Assignment::class);
    }

    public function department() : BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
