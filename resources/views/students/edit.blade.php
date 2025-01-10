@extends('layouts.app')

@section('content')
<h1>Edit Student</h1>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ $student->phone }}" required>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" class="form-control" value="{{ $student->dob }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

