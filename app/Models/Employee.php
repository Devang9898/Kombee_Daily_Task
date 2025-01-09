<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'gender',
        'blood_group',
        'location',
        'hobbies',
    ];

    protected $casts = [
        'hobbies' => 'array',  // Cast hobbies as an array for easy manipulation
    ];

    // Accessor for First Name
    public function getFirstNameAttribute($value)
    {
        return ucfirst(strtolower($value));  // Capitalize the first letter
    }

    // Accessor for Middle Name
    public function getMiddleNameAttribute($value)
    {
        return ucfirst(strtolower($value));  // Capitalize the first letter
    }

    // Accessor for Last Name
    public function getLastNameAttribute($value)
    {
        return ucfirst(strtolower($value));  // Capitalize the first letter
    }

    // Accessor for Gender
    public function getGenderAttribute($value)
    {
        return ucfirst($value);  // Capitalize first letter of gender
    }

    // Accessor for Blood Group
    public function getBloodGroupAttribute($value)
    {
        return strtoupper($value);  // Ensure blood group is uppercase
    }

    // Accessor for Hobbies (JSON)
    public function getHobbiesAttribute($value)
    {
        return json_decode($value, true);  // Decode JSON to array
    }

    // Mutator for First Name
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst(strtolower($value));  // Capitalize first letter
    }

    // Mutator for Middle Name
    public function setMiddleNameAttribute($value)
    {
        $this->attributes['middle_name'] = ucfirst(strtolower($value));  // Capitalize first letter
    }

    // Mutator for Last Name
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst(strtolower($value));  // Capitalize first letter
    }

    // Mutator for Gender
    public function setGenderAttribute($value)
    {
        $this->attributes['gender'] = strtolower($value);  // Store gender in lowercase
    }

    // Mutator for Blood Group
    public function setBloodGroupAttribute($value)
    {
        $this->attributes['blood_group'] = strtoupper($value);  // Store blood group in uppercase
    }

    // Mutator for Hobbies (JSON)
    public function setHobbiesAttribute($value)
    {
        $this->attributes['hobbies'] = json_encode($value);  // Store hobbies as JSON
    }

    // Mutator for Email (Convert to lowercase)
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);  // Convert email to lowercase
    }
}
