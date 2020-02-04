<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


/**
id, name, firstname, lastnam, email, password, bio
*/
    public function up()
    {
	Schema::table('users', function (Blueprint $table) {
		$table->string('name')->nullable()->change();
		$table->string('firstname')->nullable()->change();
		$table->string('lastname')->nullable()->change();
		$table->string('email')->nullable()->change();
		$table->string('password')->nullable()->change();

	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
