<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Department::all();
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 422);
        }
        
        $created = Department::create($validator->validated());

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

        return Department::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
