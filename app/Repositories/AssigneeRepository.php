<?php

namespace App\Repositories;

use App\Models\Assignee;

class AssigneeRepository
{
    public function all()
    {
        return Assignee::all();
    }
    public function getById(string $id)
    {
        return Assignee::find($id);
    }
}
