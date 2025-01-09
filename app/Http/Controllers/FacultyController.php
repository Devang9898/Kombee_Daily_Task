<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Faculty;
//use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Show the form to create a new faculty.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('faculty.create');
    }

    /**
     * Store a newly created faculty in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:faculties,email',
            'department' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
        ]);

        // Store the faculty data
        Faculty::create($validatedData);

        // Redirect to the faculty list or a confirmation page
        return redirect()->route('faculty.create')->with('success', 'Faculty created successfully!');
    }
    // Show faculty details
    public function show($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('faculty.show', compact('faculty'));
    }

    // Edit faculty details
    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('faculty.edit', compact('faculty'));
    }

    // Update faculty details
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:faculties,email,' . $id,
            'department' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
        ]);

        // Find and update the faculty data
        $faculty = Faculty::findOrFail($id);
        $faculty->update($validatedData);

        // Redirect to the faculty details page with success message
        return redirect()->route('faculty.show', $faculty->id)->with('success', 'Faculty updated successfully!');
    }


}
namespace App\Http\Controllers;

//use App\Models\Faculty;
//use Illuminate\Http\Request;

 