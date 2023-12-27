<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactData;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data (you can add more validation rules as needed)
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'country' => 'required|string',
            'note' => 'nullable|string',
        ]);

        // Create a new database record
        $formData = new FormData(); // Update the variable name to match the model
        $formData->fill($validatedData);
        $formData->save();

        // Return a JSON response with the success flag and message
        return response()->json([
            'success' => true,
            'message' => 'Thank You',
        ]);
    }
}
