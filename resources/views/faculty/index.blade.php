@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Faculty List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach($faculties as $faculty)
                <tr>
                    <td>{{ $faculty->first_name }}</td>
                    <td>{{ $faculty->last_name }}</td>
                    <td>{{ $faculty->email }}</td>
                    <td>{{ $faculty->department }}</td>
                    <td>{{ $faculty->salary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
