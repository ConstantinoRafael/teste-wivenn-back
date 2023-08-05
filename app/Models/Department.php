<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function assignees() : HasOne
    {
        return $this->hasOne(Assignee::class);
    }
}
