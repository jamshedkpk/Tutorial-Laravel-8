<?php
namespace Database\Factories;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
protected $model = Course::class;
public function definition()
{
return
[
'student_id'=>random_int(1,5),
'subject_id'=>random_int(1,5),
];
}
}
