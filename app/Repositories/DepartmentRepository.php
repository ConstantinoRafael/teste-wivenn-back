<?php

namespace App\Repositories;

use App\Models\Department;
use Brick\Math\BigInteger;

class DepartmentRepository
{
    public function getAll()
    {
        return Department::all();
    }

    public function getById(string $id)
    {
        return Department::find($id);
    }
}
