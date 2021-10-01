<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_models', function (Blueprint $table) {
            $table->id();
            $table->char('first',20);
            $table->char('second',20);
            $table->char('father',20);
            $table->char('gender',6);
            $table->date('dob');
            $table->string('cnic');
            $table->string('phone');
            $table->char('religion',10);
            $table->string('email');
            $table->string('address');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_models');
    }
}
