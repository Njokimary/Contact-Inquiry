<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactInquiryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('/contact', [ContactInquiryController::class, 'store']);
Route::middleware('auth.basic.custom')->post('/contact', [ContactInquiryController::class, 'store']);

Route::get('/contact', function () {
    return response()->json(['message' => 'Contact endpoint exists. Use POST to submit inquiries.']);
});

// Route::post('/contact', [ContactInquiryController::class, 'store']);