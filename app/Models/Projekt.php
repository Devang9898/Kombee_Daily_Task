<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projekt extends Model
{
    //
    use HasFactory;

    protected $primaryKey = 'pid';

    protected $fillable = [
        'project_name', 'project_manager',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'pid');
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class, 'mid');
    }
}





