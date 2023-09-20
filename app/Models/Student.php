<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Subject;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey="student_id";
    public $fillable=['student_name'];
    protected $guard=[];
    public $timestamps=false;

/*
Example of Accessors
public function getstudent_nameAttribute($value)
{
return ucFirst($value);
}
Example of Mutators
public function setstudent_nameAttributes($value)
{
$this->attributes['student_name']="HI " .$value;	
}
*/
// One To One Relationship With Profile
public function getprofile()
{
	
return $this->hasOne(Profile::class,'student_id');
}

// Many to Many relationship with Subject
public function getsubjects()
{
return $this->belongsToMany(Subject::class,'courses','student_id','subject_id');	
}

}
