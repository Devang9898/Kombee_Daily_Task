<?php






namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $primaryKey = 'eid';

    protected $fillable = [
        'ename', 'edesg', 'pid',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'pid');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'pid');
    }

    public function manager()
    {
        return $this->hasOne(Manager::class, 'eid');
    }
}
?>
