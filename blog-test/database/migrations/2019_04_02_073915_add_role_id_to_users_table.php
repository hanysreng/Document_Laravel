<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
        });

        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'role_id'=>1
        ]);
        DB::table('users')->insert([
            'name'=>'student',
            'email'=>'student@gmail.com',
            'password'=>bcrypt('password'),
            'role_id'=>2
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
        });
    }
}
