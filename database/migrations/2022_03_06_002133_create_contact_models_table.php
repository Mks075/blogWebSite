<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('address')->nullable();
            $table->integer('number')->nullable();
            $table->string('email')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('yt')->nullable();
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
        Schema::dropIfExists('contact_models');
    }
}
