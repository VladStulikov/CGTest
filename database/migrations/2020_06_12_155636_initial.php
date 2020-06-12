<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string("phone");
            $table->string('email')->unique();
            $table->text("bio");
            $table->string('profile_picture');
            $table->timestamps();
        });
        
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("photographer_id")->nullable(false);
            $table->string("title");
            $table->text("description");
            $table->string('img');
            $table->date('date');
            $table->boolean('featured')->nullable(false)->default(false);
            $table->timestamps();
        });
        
        Schema::table('photos', function (Blueprint $table) {
            $table->foreign('photographer_id')->references('id')->on('photographers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('albums', function (Blueprint $table) {
            $table->dropForeign('photos_photographer_id_foreign');
        });

        Schema::dropIfExists('photographers');
        Schema::dropIfExists('photos');
    }
}
