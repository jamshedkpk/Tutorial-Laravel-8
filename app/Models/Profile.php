<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Profile extends Model
{
    use HasFactory;
    protected $primaryKey="profile_id";
    protected $guard=[];
    public $timestamps=false;
    public $fillable=['student_id','student_email'];
}
