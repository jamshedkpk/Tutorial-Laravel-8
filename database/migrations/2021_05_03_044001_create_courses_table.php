<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
public function up()
{
Schema::create('courses', function (Blueprint $table) {
$table->bigIncrements('course_id');
$table->bigInteger('student_id');
$table->bigInteger('subject_id');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('courses');
}
}
