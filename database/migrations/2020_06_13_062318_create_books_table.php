<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->integer('theory')->nullable();
            $table->integer('practical')->nullable();
            $table->integer('credit')->nullable();
            $table->integer('tc')->nullable();
            $table->integer('tf')->nullable();
            $table->integer('pc')->nullable();
            $table->integer('pf')->nullable();
            $table->integer('total_mark')->nullable();
            $table->integer('quantity')->default('0');
            $table->double('total_price', 8, 2)->default('0');
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
        Schema::dropIfExists('books');
    }
}
