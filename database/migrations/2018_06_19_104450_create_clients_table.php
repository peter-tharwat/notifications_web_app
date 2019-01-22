<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date')->nullable();
        
            $table->string('name',190);
            $table->string('email',190)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('taxid',20)->nullable();
            $table->string('startbalance',20)->nullable();
            $table->string('contacttype',190)->nullable();
            $table->string('address',190)->nullable();



            $table->string('send_not',190)->nullable();
            $table->string('send_not_methods',190)->nullable();
            $table->string('send_not_period',190)->nullable();

            $table->string('last_send',190)->nullable();
            $table->string('next_send',190)->nullable();

            
            $table->string('rand_num',190)->nullable();
 
            $table->string('adder',190)->nullable();
            $table->string('addercompany',190)->nullable();

            $table->string('facebook',190)->nullable();
            $table->string('twitter',190)->nullable();
            $table->string('linkedin',190)->nullable();
            $table->string('google',190)->nullable();
            $table->string('instagram',190)->nullable();
            $table->string('website',190)->nullable();

        
            $table->string('details',190)->nullable();
 
            $table->string('isactive',190)->nullable();
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
        Schema::dropIfExists('clients');
    }
}
