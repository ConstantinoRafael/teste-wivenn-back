<?php

namespace App\Http\Controllers;

use App\Models\Assignee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(),[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|nullable',
            'department_id' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 422);
        }

        //Procurar o email pra ver se é único...
        
        $created = Assignee::create($validator->validated());

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
