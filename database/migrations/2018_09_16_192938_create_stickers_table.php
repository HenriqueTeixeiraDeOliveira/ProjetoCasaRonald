<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStickersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stickers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('registration')->unique();
            $table->string('photo_path');
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('sticker_user', function (Blueprint $table) {
            $table->unsignedInteger('sticker_id');
            $table->unsignedInteger('user_id');
            $table->primary(['sticker_id','user_id']);
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stickers');
        Schema::dropIfExists('sticker_user');
    }
}
