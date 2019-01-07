<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Deals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('client_id');
            $table->string('deal_details_for_emp',190)->nullable();
            $table->string('deal_details_for_client',190)->nullable();
            $table->string('deal_mount',190)->nullable();
            $table->string('deal_currency',190)->nullable();
            $table->string('for',190)->nullable(); 
            $table->string('deal_borrow_payback',190)->nullable();
            $table->string('deal_init_send_not_methods',190)->nullable();
            $table->integer('not_setter_id');

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
        Schema::dropIfExists('deals');
    }
}
