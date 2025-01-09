@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Faculty</h2>

    <!-- Display success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form to input faculty data -->
    <form action="{{ route('faculty.store') }}" method="POST">
        @csrf

        <!-- First Name -->
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" required>
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Last Name -->
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}" required>
            @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Department -->
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" id="department" class="form-control" value="{{ old('department') }}" required>
            @error('department')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Salary -->
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" value="{{ old('salary') }}" required>
            @error('salary')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Faculty</button>
    </form>
</div>
@endsection
