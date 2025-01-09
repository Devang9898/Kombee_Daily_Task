<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




use App\Models\Employee;


class EmployeeController extends Controller
{
    // Display the form to create a new employee
    public function create()
    {
        return view('employees.create');
    }

    // Store a new employee record
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'gender' => 'required|in:male,female,other',
            'blood_group' => 'required|in:A+,A-,B+,B-,O+,O-,AB+,AB-',
            'location' => 'required|string',
            'hobbies' => 'nullable|array',
        ]);

        $employee = Employee::create($request->all());

        return redirect()->route('employees.index');
    }

    // Display all employees
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Show the form to edit an employee
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Update an employee record
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'gender' => 'required|in:male,female,other',
            'blood_group' => 'required|in:A+,A-,B+,B-,O+,O-,AB+,AB-',
            'location' => 'required|string',
            'hobbies' => 'nullable|array',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index');
    }

    // Delete an employee
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
// Show a single employee

