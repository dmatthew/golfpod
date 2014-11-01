<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');                          // Primary Key
            $table->string('username', 60)->unique();          // Unique Username
            $table->string('email', 100)->unique();            // Unique email
            $table->string('password', 64);                    // Password
            $table->timestamps();                              // created_at, updated_at
            $table->string('remember_token', 100)->nullable(); // Remember me token
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
