<?php
namespace Database\Factories;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
protected $model = Profile::class;
public function definition()
{
return 
[
'student_id'=>random_int(1,5),
'student_email'=>$this->faker->email,
];
}
}
