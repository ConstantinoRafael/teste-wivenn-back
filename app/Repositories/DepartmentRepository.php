<?php

namespace App\Repositories;

use App\Models\Department;
use Illuminate\Support\Facades\DB;

class DepartmentRepository
{
    public function all()
    {
        return Department::all();
    }
}
