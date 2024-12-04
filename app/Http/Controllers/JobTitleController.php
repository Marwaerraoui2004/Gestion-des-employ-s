<?php

namespace App\Http\Controllers;

use App\Models\JobTitle;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $job=JobTitle::all();
         return response()->json($job);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $job=JobTitle::create($data);
        return response()->json($job);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job=JobTitle::findOrFail($id);
        return response()->json($job);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->all();
        $job=JobTitle::findOrFail($id);
        $job->update($data);
        return response()->json($job);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job=JobTitle::findOrFail($id);
        $job->delete();
        return response()->json(['message'=>'job deleted successfully !']);
    }
}
