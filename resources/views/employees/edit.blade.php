@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Employee</h2>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $employee->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="middle_name">Middle Name</label>
            <input type="text" name="middle_name" id="middle_name" class="form-control" value="{{ $employee->middle_name }}">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $employee->last_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" value="male" {{ $employee->gender == 'male' ? 'checked' : '' }}> Male
            <input type="radio" name="gender" value="female" {{ $employee->gender == 'female' ? 'checked' : '' }}> Female
            <input type="radio" name="gender" value="other" {{ $employee->gender == 'other' ? 'checked' : '' }}> Other
        </div>
        <div class="form-group">
            <label for="blood_group">Blood Group</label>
            <select name="blood_group" id="blood_group" class="form-control">
                <option value="A+" {{ $employee->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                <option value="A-" {{ $employee->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                <option value="B+" {{ $employee->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                <option value="B-" {{ $employee->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                <option value="O+" {{ $employee->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                <option value="O-" {{ $employee->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                <option value="AB+" {{ $employee->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                <option value="AB-" {{ $employee->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
            </select>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <select name="location" id="location" class="form-control">
                <option value="New York" {{ $employee->location == 'New York' ? 'selected' : '' }}>New York</option>
                <option value="Los Angeles" {{ $employee->location == 'Los Angeles' ? 'selected' : '' }}>Los Angeles</option>
                <option value="Chicago" {{ $employee->location == 'Chicago' ? 'selected' : '' }}>Chicago</option>
                <option value="Houston" {{ $employee->location == 'Houston' ? 'selected' : '' }}>Houston</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hobbies">Hobbies</label><br>
            <input type="checkbox" name="hobbies[]" value="Reading" {{ in_array('Reading', $employee->hobbies) ? 'checked' : '' }}> Reading
            <input type="checkbox" name="hobbies[]" value="Traveling" {{ in_array('Traveling', $employee->hobbies) ? 'checked' : '' }}> Traveling
            <input type="checkbox" name="hobbies[]" value="Sports" {{ in_array('Sports', $employee->hobbies) ? 'checked' : '' }}> Sports
            <input type="checkbox" name="hobbies[]" value="Music" {{ in_array('Music', $employee->hobbies) ? 'checked' : '' }}> Music
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
