<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Subject extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey="subject_id";
    public $fillable=['subject_name'];
    protected $guard=[];
    public $timestamps=false;

}
