<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
public function up()
{
Schema::create('profiles', function (Blueprint $table) {
$table->bigIncrements('profile_id');
$table->bigInteger('student_id');
$table->string('student_email');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('profiles');
}
}
