<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount',11,2);
            $table->timestamps();
        });

        Schema::table('payments',function(Blueprint $table) {
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
        });

        Schema::table('payments',function(Blueprint $table) {
            $table->integer('bill_id')->unsigned();
            $table->foreign('bill_id')->references('id')->on('bills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments',function(Blueprint $table) {
            $table->dropForeign(['bill_id']);
        });

        Schema::table('payments',function(Blueprint $table) {
            $table->dropForeign(['customer_id']);
        });
        
        Schema::drop('payments');
    }
}
