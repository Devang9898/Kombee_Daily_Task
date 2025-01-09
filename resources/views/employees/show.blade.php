@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Employee Details</h2>
    <table class="table mt-3">
        <tr>
            <th>First Name:</th>
            <td>{{ $employee->first_name }}</td>
        </tr>
        <tr>
            <th>Middle Name:</th>
            <td>{{ $employee->middle_name }}</td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td>{{ $employee->last_name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $employee->email }}</td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td>{{ ucfirst($employee->gender) }}</td>
        </tr>
        <tr>
            <th>Blood Group:</th>
            <td>{{ $employee->blood_group }}</td>
        </tr>
        <tr>
            <th>Location:</th>
            <td>{{ $employee->location }}</td>
        </tr>
        <tr>
            <th>Hobbies:</th>
            <td>{{ implode(', ', $employee->hobbies) }}</td>
        </tr>
    </table>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
