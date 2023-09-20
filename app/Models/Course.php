<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Student;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey="course_id";
    public $fillable=['course_name'];
    protected $guard=[];
    public $timestamps=false;
}
