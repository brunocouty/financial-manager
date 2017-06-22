<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->date('date');
            $table->enum('type', [0, 1]);
            $table->decimal('value', 8,2);
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('financial_categories');
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
        Schema::dropIfExists('financial_registers');
    }
}