<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EployeeController extends Controller
{
    
    // public function index()
    // {
    //     $employees=Employee::all();
    //     return response()->json($employees);
    // }

    public function index()
    {
        $employees=Employee::orderBy('id','desc')->get();
        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $employee=Employee::create($data);
        return response()->json($employee);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee=Employee::findOrFail($id);
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->all();
        $employee=Employee::findOrFail($id);
        $employee->update($data);
        return response()->json($employee);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee=Employee::findOrFail($id);
        $employee->delete();
        return response()->json(['message'=>'Employee deleted successfully !']);
    }
}
