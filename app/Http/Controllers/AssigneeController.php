<?php

namespace App\Http\Controllers;

use App\Models\Assignee;
use Illuminate\Http\Request;

class AssigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Assignee::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Assignee::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignee $assignee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignee $assignee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignee $assignee)
    {
        //
    }
}
