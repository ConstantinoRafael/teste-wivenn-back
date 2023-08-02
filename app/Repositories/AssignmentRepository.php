<?php

namespace App\Repositories;

use App\Models\Assignment;

class AssignmentRepository
{
    public function all()
    {
        return Assignment::all();
    }
}
