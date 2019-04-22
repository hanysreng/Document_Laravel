<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); // name of table user
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users') // name of table user
                  ->onDelete('cascade');
           $table->string('phone');
           $table->text('address');
           $table->timestamps();
           // when need runn php artisan migrate
        });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
