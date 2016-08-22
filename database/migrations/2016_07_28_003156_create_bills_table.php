<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',255)->nullable();
            $table->decimal('total',11,2);
            $table->decimal('remaining',11,2);
            $table->integer('status')->default(0);
            $table->timestamp('due_to');
            $table->timestamps();
        });

        Schema::table('bills',function(Blueprint $table) {
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('bills',function(Blueprint $table) {
            $table->dropForeign(['customer_id']);
        });

        Schema::drop('bills');
    }
}
