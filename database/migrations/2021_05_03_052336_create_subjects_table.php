<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
public function up()
{
Schema::create('subjects', function (Blueprint $table) {
$table->bigIncrements('subject_id');
$table->string('subject_name');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('subjects');
}
}
