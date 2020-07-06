<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('bill_number');
            $table->date('purchase_date');
            $table->integer('book_id');
            $table->integer('publication_id');
            $table->integer('author_id');
            $table->integer('quantity');
            $table->double('unit_price',5, 2);
            $table->float('discount')->nullable();
            $table->float('payable_price');
            $table->string('remarks')->nullable();
            $table->tinyInteger('status')->default('0')->comment('0=pending,1=Approved');
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
