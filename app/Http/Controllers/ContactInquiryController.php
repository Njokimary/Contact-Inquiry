<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInquiry;
use Illuminate\Support\Facades\Validator;

class ContactInquiryController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $contactInquiry = ContactInquiry::create($request->all());

        return response()->json(['message' => 'Inquiry submitted successfully'], 201);
    }
}
