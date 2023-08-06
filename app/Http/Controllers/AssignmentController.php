<?php

namespace App\Http\Controllers;

use App\Models\Assignment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Assignment::all();
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
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'assignee_id' => 'required',
            'due_date' => 'nullable',
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 422);
        }

        $validated = $validator->validated();
        
        $created = Assignment::create($validated);

        if($created)
        {
            return response()->json([
                'message' => 'Created',
                'status' => 200,
                'data' => $created
            ]);
           
        }

        return response()->json([
            'message' => 'Not created',
            'status' => 400
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Assignment::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'assignee_id' => 'required',
            'due_date' => 'nullable',
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 422);
        }
        
        $validated = $validator->validated();

        $updated = Assignment::find($id)->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'assignee_id' => $validated['assignee_id'],
            'due_date' => $validated['due_date'],
        ]);

        if($updated)
        {
            return response()->json([
                'message' => 'Updated',
                'status' => 200,
                'data' => $request->all()
            ]);
           
        }

        return response()->json([
            'message' => 'Not updated',
            'status' => 400
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Assignment::find($id)->delete();

        if($deleted)
        {
            return response()->json([
                'message' => 'Deleted',
                'status' => 200
            ]);
        }

        return response()->json([
            'message' => 'Not deleted',
            'status' => 400
        ]);
    }
}
