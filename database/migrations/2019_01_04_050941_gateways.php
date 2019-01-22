<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gateways extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateways', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sms_phone_sender',190)->nullable();
            $table->string('sms_token_number',190)->nullable();

            $table->string('whatsapp_phone_sender',190)->nullable();
            $table->string('whatsapp_token_number',190)->nullable();

            $table->string('email_sender',190)->nullable();

            $table->integer('setter_id');

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
        Schema::dropIfExists('gateways');
    }
}
