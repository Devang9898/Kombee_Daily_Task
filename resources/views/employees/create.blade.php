@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="middle_name">Middle Name</label>
            <input type="text" name="middle_name" id="middle_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
        </div>
        <div class="form-group">
            <label for="blood_group">Blood Group</label>
            <select name="blood_group" id="blood_group" class="form-control">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <select name="location" id="location" class="form-control">
                <option value="New York">New York</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Chicago">Chicago</option>
                <option value="Houston">Houston</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hobbies">Hobbies</label><br>
            <input type="checkbox" name="hobbies[]" value="Reading"> Reading
            <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
            <input type="checkbox" name="hobbies[]" value="Sports"> Sports
            <input type="checkbox" name="hobbies[]" value="Music"> Music
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
