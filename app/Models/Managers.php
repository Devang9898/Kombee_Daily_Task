<?php

namespace App\Models;





use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    use HasFactory;

    protected $primaryKey = 'mid';

    protected $fillable = [
        'eid', 'manager_name', 'manager_head',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'eid');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'mid');
    }
}

