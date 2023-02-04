<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id'); //this is for auro increment 
            $table->string('slug');
            $table->string('title');
            $table->longText('descreption');
            $table->string('image_path');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users'); //this is how we use the foreign key 

            $table->timestamps();
            
        });
    }

    public function down()
    {
        
    }
};
