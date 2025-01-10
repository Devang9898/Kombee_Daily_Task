<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'dob'];
    // Accessor for name 
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    // Mutator for email
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    // Accessor for formatted date of birth
    public function getDobAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-M-Y');
    }

    // Mutator for phone
    public function setPhoneAttribute($value)
    {
        // Storing phone number with only digits
        $this->attributes['phone'] = preg_replace('/[^0-9]/', '', $value);
    }
}
/*<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'dob'
    ];

    // Accessor for name 
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    // Mutator for email
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    // Accessor for formatted date of birth
    public function getDobAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-M-Y');
    }

    // Mutator for phone
    public function setPhoneAttribute($value)
    {
        // Storing phone number with only digits
        $this->attributes['phone'] = preg_replace('/[^0-9]/', '', $value);
    }
}
?>
*/