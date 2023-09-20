<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateStudentsTable extends Migration
{
public function up()
{
Schema::create('students', function (Blueprint $table) {
$table->bigIncrements('student_id');
$table->bigInteger('department_id');
$table->string('student_name');
});
}
public function down()
{
Schema::dropIfExists('students');
}
}
