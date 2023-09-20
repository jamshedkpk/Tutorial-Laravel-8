<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
public function up()
{
Schema::create('departments', function (Blueprint $table) {
$table->bigIncrements('department_id');
$table->string('department_name');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('departments');
}
}
