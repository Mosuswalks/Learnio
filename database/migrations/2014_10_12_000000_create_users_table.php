<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('username');
            $table->string('email')->unique();
=======
            $table->string('name');
            $table->string('email', '191')->unique();
>>>>>>> MyBranch
=======
            $table->string('name');
            $table->string('email', '191')->unique();
>>>>>>> 191d8a38bc8541dfb3a704e6e5f6aaa5d0ef7030
            $table->string('password');
            $table->softDeletes('softDeletes');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
