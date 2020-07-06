<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('usertype')->default('1');
            $table->integer('designation_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('joining_date')->nullable();
            $table->string('religion')->nullable();
            $table->string('nid')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('activation_status')->default('1');
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('users');
    }
}
