<?php

namespace App\Http\Controllers;

use App\Models\Attestation;
use Illuminate\Http\Request;

class AttestationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $att=Attestation::orderBy('id','desc')->get();
        return response()->json($att);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $att=Attestation::create($data);
        return response()->json($att);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $att=Attestation::findOrFail($id);
        return response()->json($att);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->all();
        $att=Attestation::findOrFail($id);
        $att->update($data);
        return response()->json($att);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $att=Attestation::findOrFail($id);
        $att->delete();
        return response()->json(['message'=>'Attestation a été supprimé avec succée !']);
    }
}
