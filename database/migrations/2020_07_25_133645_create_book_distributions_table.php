<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_distributions', function (Blueprint $table) {
            $table->id();
            $table->integer('student_roll');
            $table->integer('book_id');
            $table->integer('publication_id');
            $table->integer('author_id');
            $table->integer('quantity');
            $table->date('issue_date')->nullable();
            $table->date('return_date')->nullable();
            $table->tinyInteger('return_status')->default('0');
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
        Schema::dropIfExists('book_distributions');
    }
}
