<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table-> bigInteger('user_id')-> unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');
            $table->string('name');
            $table->string('f_name');
            $table->string('uni');
            $table->text('bio');
            $table->string('skill');
            $table->string('diploma');
            $table->boolean('sex');
            $table->string('n_code')->uniqid();
            $table->date('birthday');
            $table->string('Province');
            $table->string('City');
            $table->string('edu_status');
            $table-> text('about_me');
            $table->string('profile_photo');

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
        Schema::dropIfExists('profile');
    }
};
