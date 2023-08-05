<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'assignee_id',
        'due_date'
    ];

    public function assignee() : BelongsTo
    {
        return $this->belongsTo(Assignee::class);
    }
}
