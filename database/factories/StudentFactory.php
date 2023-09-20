<?php
namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
class StudentFactory extends Factory
{
protected $model = Student::class;
public function definition()
{
return
[
'student_name'=>$this->faker->name(),
'department_id'=>random_int(1,5),
];
}
}
