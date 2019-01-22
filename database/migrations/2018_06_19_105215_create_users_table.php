<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->dateTime('date')->nullable();
            $table->string('company',190)->nullable();
            $table->string('name',190)->nullable();
            
            $table->string('phone',20)->nullable();
            $table->string('sallary',20)->nullable();
            $table->string('contacttype',190)->nullable();
            $table->string('address',190)->nullable();

            $table->string('email',190)->nullable();
            $table->string('password',190)->nullable();

 
            $table->string('adder',190)->nullable(); //emp who added him

            $table->string('facebook',190)->nullable();
            $table->string('google',190)->nullable();
            $table->string('twitter',190)->nullable();
            $table->string('linkedin',190)->nullable();
            $table->string('instagram',190)->nullable();

            $table->string('website',190)->nullable();

        
            $table->string('details',190)->nullable();
 
            $table->string('isactive',190)->nullable();
            $table->string('remember_token',190)->nullable();
            
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
