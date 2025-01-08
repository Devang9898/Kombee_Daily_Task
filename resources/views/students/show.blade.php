@extends('layouts.app')

@section('content')
<h1>Student Details</h1>
<table class="table">
    <tr>
        <th>ID:</th>
        <td>{{ $student->id }}</td>
    </tr>
    <tr>
        <th>Name:</th>
        <td>{{ $student->name }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{ $student->email }}</td>
    </tr>
    <tr>
        <th>Phone:</th>
        <td>{{ $student->phone }}</td>
    </tr>
    <tr>
        <th>Date of Birth:</th>
        <td>{{ $student->dob }}</td>
    </tr>
</table>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
<a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection
