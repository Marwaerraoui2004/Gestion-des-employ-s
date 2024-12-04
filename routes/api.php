<?php

use App\Http\Controllers\AttestationController;
use App\Http\Controllers\EployeeController;
use App\Http\Controllers\JobTitleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('employees', EployeeController::class);
Route::apiResource('job-titles', JobTitleController::class);
Route::apiResource('attestations', AttestationController::class);


Route::get('job_titles/{id}', [JobTitleController::class, 'show']);
Route::get('job_titles', [JobTitleController::class, 'index']);
Route::post('job_titles', [JobTitleController::class, 'store']);
Route::put('job_titles/{id}', [JobTitleController::class, 'update']);
Route::delete('job_titles/{id}', [JobTitleController::class, 'destroy']);

