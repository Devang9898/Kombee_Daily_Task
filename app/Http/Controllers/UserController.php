<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm()
    {
        return view('vote');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $message = $validatedData['age'] >= 18 
            ? "Hello {$validatedData['name']}, you are eligible to vote." 
            : "Hello {$validatedData['name']}, you are not eligible to vote.";

        return view('vote', ['message' => $message]);
    }
}
