<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('phone',15);
            $table->string('gardian_phone',15)->nullable();
            $table->string('gardian_profession')->nullable();
            $table->string('email',100)->nullable();
            $table->string('blood_group',15)->nullable();
            $table->string('religion',20);
            $table->string('nationality',30);
            $table->string('dob')->nullable();
            $table->string('admission_date');
            $table->string('gender',10);
            $table->integer('college_roll');
            $table->integer('board_roll')->nullable();
            $table->integer('registration')->nullable();
            $table->tinyInteger('department_id');
            $table->tinyInteger('semester_id');
            $table->tinyInteger('session_id');
            $table->float('total_fee', 8, 2)->nullable();
            $table->float('semester_fee', 8, 2)->nullable();
            $table->tinyInteger('discount')->nullable();
            $table->string('address')->nullable();
            $table->string('remarks')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('activation_status')->default('1');
            $table->tinyInteger('created_by');
            $table->tinyInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}


