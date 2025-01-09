@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Location</th>
                <th>Hobbies</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->middle_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->blood_group }}</td>
                <td>{{ $employee->location }}</td>
                <td>{{ implode(', ', $employee->hobbies) }}</td>
                <td>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
