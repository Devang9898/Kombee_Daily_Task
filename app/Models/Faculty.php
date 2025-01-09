<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


///namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
///use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'department',
        'salary',
    ];

    // Accessor for first name (capitalizing the first letter)
    public function getFirstNameAttribute($value)
    {
        return ucfirst(strtolower($value));  // Capitalize the first letter
    }

    // Accessor for last name (capitalizing the first letter)
    public function getLastNameAttribute($value)
    {
        return ucfirst(strtolower($value));  // Capitalize the first letter
    }

    // Accessor for email (ensure it's always in lowercase)
    public function getEmailAttribute($value)
    {
        return strtolower($value);  // Ensure email is in lowercase
    }

    // Accessor for department (capitalize first letter of each word)
    public function getDepartmentAttribute($value)
    {
        return ucwords(strtolower($value));  // Capitalize each word in the department name
    }

    // Accessor for salary (format as currency)
    public function getSalaryAttribute($value)
    {
        return '$' . number_format($value, 2);  // Format salary as currency
    }

    // Mutator for first name (ensures it's stored as capitalized)
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst(strtolower($value));  // Capitalize before saving
    }

    // Mutator for last name (ensures it's stored as capitalized)
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst(strtolower($value));  // Capitalize before saving
    }

    // Mutator for email (ensures it's stored in lowercase)
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);  // Store email in lowercase
    }

    // Mutator for department (ensures it's stored with capitalized first letters)
    public function setDepartmentAttribute($value)
    {
        $this->attributes['department'] = ucwords(strtolower($value));  // Store with capitalized words
    }

    // Mutator for salary (ensure it's stored as a number without formatting)
    public function setSalaryAttribute($value)
    {
        $this->attributes['salary'] = floatval(str_replace('$', '', $value));  // Remove $ and store as number
    }
}
