<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCariculamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cariculams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('coments')->nullable();
            $table->tinyInteger('activation_status')->default('1');
            $table->tinyInteger('created_by');
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
        Schema::dropIfExists('cariculams');
    }
}
