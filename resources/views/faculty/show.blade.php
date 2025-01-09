@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Faculty Details</h2>

    <table class="table">
        <tr>
            <th>First Name</th>
            <td>{{ $faculty->first_name }}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{ $faculty->last_name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $faculty->email }}</td>
        </tr>
        <tr>
            <th>Department</th>
            <td>{{ $faculty->department }}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{ $faculty->salary }}</td>
        </tr>
    </table>

    <a href="{{ route('faculty.index') }}" class="btn btn-primary">Back to Faculty List</a>
</div>
@endsection
