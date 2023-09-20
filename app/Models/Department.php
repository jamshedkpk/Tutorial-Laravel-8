<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey="department_id";
    public $fillable=['department_name','student_id'];
    protected $guard=[];
    public $timestamps=false;

// One to many relationship

public function getstudents()
{
return $this->hasMany(Student::class,'department_id');
}

}
