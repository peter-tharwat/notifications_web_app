<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');

            $table->text('message_content')->nullable();
            $table->string('message_type',190)->nullable();
            $table->string('message_receiver_id',190)->nullable();
            $table->string('client_or_emp',190)->nullable();
            $table->string('message_num_or_email',190)->nullable();
            $table->string('message_about',190)->nullable();
            $table->text('message_status')->nullable();

            $table->integer('sender_id');
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
        Schema::dropIfExists('messages');
    }
}
